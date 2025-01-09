<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListPresets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxAverageBitrate
 * @property int $QvbrQualityLevel
 * @property double $QvbrQualityLevelFineTune
 */
class H264QvbrSettings extends Shape
{
    /**
     * @param array{
     *     MaxAverageBitrate?: int,
     *     QvbrQualityLevel?: int,
     *     QvbrQualityLevelFineTune?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
