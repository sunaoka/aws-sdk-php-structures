<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<-1, 2147483647>|null $Height
 * @property 'PIXELS'|'PERCENTAGE'|null $Unit
 * @property int<-1, 2147483647>|null $Width
 * @property int<-2147483648, 2147483647>|null $XPosition
 * @property int<-2147483648, 2147483647>|null $YPosition
 */
class VideoOverlayPosition extends Shape
{
    /**
     * @param array{
     *     Height?: int<-1, 2147483647>|null,
     *     Unit?: 'PIXELS'|'PERCENTAGE'|null,
     *     Width?: int<-1, 2147483647>|null,
     *     XPosition?: int<-2147483648, 2147483647>|null,
     *     YPosition?: int<-2147483648, 2147483647>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
