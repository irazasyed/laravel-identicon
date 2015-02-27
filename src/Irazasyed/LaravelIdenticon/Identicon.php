<?php namespace Irazasyed\LaravelIdenticon;

use Illuminate\Support\Facades\Response;

class Identicon extends \Identicon\Identicon {

    /**
     * Laravel Response Wrapper to Display an Identicon image.
     *
     * @param string  $string
     * @param integer $size
     * @param string  $color
     * @param string  $backgroundColor
     *
     * @return \Response Display Identicon PNG Image.
     */
    public function displayImage($string, $size = 64, $color = null, $backgroundColor = null)
    {
        $imageData = $this->getImageData($string, $size, $color, $backgroundColor);

        return Response::make($imageData, 200, [ 'Content-Type' => 'image/png' ]);
    }
}