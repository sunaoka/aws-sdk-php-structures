<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DetectLabelsImageQuality $Quality
 * @property list<DominantColor> $DominantColors
 * @property DetectLabelsImageForeground $Foreground
 * @property DetectLabelsImageBackground $Background
 */
class DetectLabelsImageProperties extends Shape
{
    /**
     * @param array{
     *     Quality?: DetectLabelsImageQuality,
     *     DominantColors?: list<DominantColor>,
     *     Foreground?: DetectLabelsImageForeground,
     *     Background?: DetectLabelsImageBackground
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
