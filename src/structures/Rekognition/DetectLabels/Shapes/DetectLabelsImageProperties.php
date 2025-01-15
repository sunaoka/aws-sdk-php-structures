<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DetectLabelsImageQuality|null $Quality
 * @property list<DominantColor>|null $DominantColors
 * @property DetectLabelsImageForeground|null $Foreground
 * @property DetectLabelsImageBackground|null $Background
 */
class DetectLabelsImageProperties extends Shape
{
    /**
     * @param array{
     *     Quality?: DetectLabelsImageQuality|null,
     *     DominantColors?: list<DominantColor>|null,
     *     Foreground?: DetectLabelsImageForeground|null,
     *     Background?: DetectLabelsImageBackground|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
