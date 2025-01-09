<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<90, 105> $MaximumRGBTolerance
 * @property int<920, 1023> $MaximumYUV
 * @property int<-5, 10> $MinimumRGBTolerance
 * @property int<0, 128> $MinimumYUV
 */
class ClipLimits extends Shape
{
    /**
     * @param array{
     *     MaximumRGBTolerance?: int<90, 105>,
     *     MaximumYUV?: int<920, 1023>,
     *     MinimumRGBTolerance?: int<-5, 10>,
     *     MinimumYUV?: int<0, 128>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
