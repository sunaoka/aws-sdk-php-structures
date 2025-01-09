<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceSearch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $Brightness
 * @property float $Sharpness
 */
class ImageQuality extends Shape
{
    /**
     * @param array{
     *     Brightness?: float,
     *     Sharpness?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
