<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1000, 1152000000>|null $MaxAverageBitrate
 * @property int<1, 10>|null $QvbrQualityLevel
 * @property double|null $QvbrQualityLevelFineTune
 */
class H264QvbrSettings extends Shape
{
    /**
     * @param array{
     *     MaxAverageBitrate?: int<1000, 1152000000>|null,
     *     QvbrQualityLevel?: int<1, 10>|null,
     *     QvbrQualityLevelFineTune?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
