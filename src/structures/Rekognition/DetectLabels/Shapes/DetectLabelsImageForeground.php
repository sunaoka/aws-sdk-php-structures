<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DetectLabelsImageQuality|null $Quality
 * @property list<DominantColor>|null $DominantColors
 */
class DetectLabelsImageForeground extends Shape
{
    /**
     * @param array{
     *     Quality?: DetectLabelsImageQuality|null,
     *     DominantColors?: list<DominantColor>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
