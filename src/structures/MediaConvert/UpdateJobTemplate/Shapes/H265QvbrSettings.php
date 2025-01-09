<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1000, 1466400000> $MaxAverageBitrate
 * @property int<1, 10> $QvbrQualityLevel
 * @property double $QvbrQualityLevelFineTune
 */
class H265QvbrSettings extends Shape
{
    /**
     * @param array{
     *     MaxAverageBitrate?: int<1000, 1466400000>,
     *     QvbrQualityLevel?: int<1, 10>,
     *     QvbrQualityLevelFineTune?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
