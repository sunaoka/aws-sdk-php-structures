<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetPersonTracking\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $Brightness
 * @property float|null $Sharpness
 */
class ImageQuality extends Shape
{
    /**
     * @param array{
     *     Brightness?: float|null,
     *     Sharpness?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
