<?php
namespace tanghao2018\helper;


class HattedCode
{

    public static function generate($code)
    {
        $width      = 50;
        $height     = 25;
        $image      = imagecreate($width, $height);
        $background = imagecolorallocate($image, 0xff, 0xff, 0xff);
        $blur       = imagecolorallocate($image, 187, 230, 247);
        $font       = imagecolorallocate($image, 41, 163, 238);
        mt_srand();
        for ($i = 0; $i < 1000; $i++) {
            imagesetpixel($image, mt_rand(0, $width), mt_rand(0, $height), $blur);
        }
        imagestring($image, 5, 7, 5, $code, $font);
        imagerectangle($image, 0, 0, $width - 1, $height - 1, $font);
        header('Content-type: image/png');
        imagepng($image);
        imagedestroy($image);
    }

    
}