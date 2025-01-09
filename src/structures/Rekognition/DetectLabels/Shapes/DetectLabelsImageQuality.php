<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $Brightness
 * @property float $Sharpness
 * @property float $Contrast
 */
class DetectLabelsImageQuality extends Shape
{
    /**
     * @param array{
     *     Brightness?: float,
     *     Sharpness?: float,
     *     Contrast?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
