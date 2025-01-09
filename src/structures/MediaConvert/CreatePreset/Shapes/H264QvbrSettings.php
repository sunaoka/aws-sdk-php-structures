<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1000, 1152000000> $MaxAverageBitrate
 * @property int<1, 10> $QvbrQualityLevel
 * @property double $QvbrQualityLevelFineTune
 */
class H264QvbrSettings extends Shape
{
    /**
     * @param array{
     *     MaxAverageBitrate?: int<1000, 1152000000>,
     *     QvbrQualityLevel?: int<1, 10>,
     *     QvbrQualityLevelFineTune?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
