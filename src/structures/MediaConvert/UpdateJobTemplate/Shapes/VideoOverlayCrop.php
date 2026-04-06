<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 2147483647>|null $Height
 * @property 'PIXELS'|'PERCENTAGE'|null $Unit
 * @property int<0, 2147483647>|null $Width
 * @property int<0, 2147483647>|null $X
 * @property int<0, 2147483647>|null $Y
 */
class VideoOverlayCrop extends Shape
{
    /**
     * @param array{
     *     Height?: int<0, 2147483647>|null,
     *     Unit?: 'PIXELS'|'PERCENTAGE'|null,
     *     Width?: int<0, 2147483647>|null,
     *     X?: int<0, 2147483647>|null,
     *     Y?: int<0, 2147483647>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
