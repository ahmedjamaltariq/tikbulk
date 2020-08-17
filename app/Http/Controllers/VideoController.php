<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use ZipArchive;

class VideoController extends Controller
{
    public function process(Request $request)
    {

        /* ----------- Exploding of all video URLs into array --------------*/
        $videos = explode(',', $request->videos);

        /*----------- A temporary array for saving video paths -------------*/
        $tempVideoPath = array();

        /*---- Creating a temporary directory named as a random integer ----*/
        $tempDir = rand();

        /*---------- Creating temporary directory in temp folder ---------- */
        if (mkdir(public_path('temp/' . $tempDir))) {

            foreach ($videos as $video) {

                /*---------- Videos scrapping section ---------*/
                $crawler = \Goutte::request('GET', $video);
                $regex = '/https?\:\/\/[^\" ]+/i';
                preg_match_all($regex, $crawler->text(), $matches);
                /*------- End Videos scrapping section --------*/

                /*------------ Validating MP4 video -----------*/
                if(isset(array_values(preg_grep('/mp4/', $matches[0]))[0])){
                    $tempVideo = rand() . ".mp4";
                    file_put_contents('temp/' . $tempDir . '/' . $tempVideo, fopen(array_values(preg_grep('/mp4/', $matches[0]))[0], 'r'));
                    $tempVideoPath[] = realpath($_SERVER["DOCUMENT_ROOT"]) . '/temp/' . $tempDir . '/' . $tempVideo;
                }
                /*---------------------------------------------*/
            }
        }

        /*---------- Instantiating ZIP Archive Object ---------*/
        $zip = new ZipArchive;

        /*--------- Creating the resultant zip file of videos named as randon integer --------*/
        $fileName = 'processed-videos/tikbulk-' . rand() . '.zip';


        /*------------------ Zipping process ------------------*/
        if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE) {
            $files = File::files(public_path('temp/' . $tempDir));
            foreach ($files as $key => $value) {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, $relativeNameInZipFile);
            }

            $zip->close();
        }
        /*----------------- End Zipping process ---------------*/


        /*------- Removing the temp directory of videos -------*/
        $this->rmdir_recursive(public_path('temp/' . $tempDir));

        /*------ returning the downloadable zip of result ------*/
        return response()->download(public_path($fileName));

    }

    /*----- This private function recursively deletes a directory ----*/
    function rmdir_recursive($dir)
    {
        foreach (scandir($dir) as $file) {
            if ('.' === $file || '..' === $file) continue;
            if (is_dir("$dir/$file")) rmdir_recursive("$dir/$file");
            else unlink("$dir/$file");
        }
        rmdir($dir);
    }
}
