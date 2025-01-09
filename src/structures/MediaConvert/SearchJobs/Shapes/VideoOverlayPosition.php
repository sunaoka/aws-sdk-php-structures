<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<-1, 2147483647> $Height
 * @property 'PIXELS'|'PERCENTAGE' $Unit
 * @property int<-1, 2147483647> $Width
 * @property int<-2147483648, 2147483647> $XPosition
 * @property int<-2147483648, 2147483647> $YPosition
 */
class VideoOverlayPosition extends Shape
{
    /**
     * @param array{
     *     Height?: int<-1, 2147483647>,
     *     Unit?: 'PIXELS'|'PERCENTAGE',
     *     Width?: int<-1, 2147483647>,
     *     XPosition?: int<-2147483648, 2147483647>,
     *     YPosition?: int<-2147483648, 2147483647>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
