<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $Brightness
 * @property float|null $Sharpness
 * @property float|null $Contrast
 */
class DetectLabelsImageQuality extends Shape
{
    /**
     * @param array{
     *     Brightness?: float|null,
     *     Sharpness?: float|null,
     *     Contrast?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
