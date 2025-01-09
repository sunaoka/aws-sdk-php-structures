<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DetectLabelsImageQuality $Quality
 * @property list<DominantColor> $DominantColors
 */
class DetectLabelsImageBackground extends Shape
{
    /**
     * @param array{
     *     Quality?: DetectLabelsImageQuality,
     *     DominantColors?: list<DominantColor>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
