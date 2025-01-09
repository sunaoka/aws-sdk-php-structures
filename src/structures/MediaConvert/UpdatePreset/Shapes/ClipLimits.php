<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaximumRGBTolerance
 * @property int $MaximumYUV
 * @property int $MinimumRGBTolerance
 * @property int $MinimumYUV
 */
class ClipLimits extends Shape
{
    /**
     * @param array{
     *     MaximumRGBTolerance?: int,
     *     MaximumYUV?: int,
     *     MinimumRGBTolerance?: int,
     *     MinimumYUV?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
