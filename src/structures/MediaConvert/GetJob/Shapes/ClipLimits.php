<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<90, 105>|null $MaximumRGBTolerance
 * @property int<920, 1023>|null $MaximumYUV
 * @property int<-5, 10>|null $MinimumRGBTolerance
 * @property int<0, 128>|null $MinimumYUV
 */
class ClipLimits extends Shape
{
    /**
     * @param array{
     *     MaximumRGBTolerance?: int<90, 105>|null,
     *     MaximumYUV?: int<920, 1023>|null,
     *     MinimumRGBTolerance?: int<-5, 10>|null,
     *     MinimumYUV?: int<0, 128>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
