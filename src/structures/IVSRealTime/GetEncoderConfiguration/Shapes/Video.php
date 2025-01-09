<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetEncoderConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<2, 1920> $width
 * @property int<2, 1920> $height
 * @property float $framerate
 * @property int<1, 8500000> $bitrate
 */
class Video extends Shape
{
    /**
     * @param array{
     *     width?: int<2, 1920>,
     *     height?: int<2, 1920>,
     *     framerate?: float,
     *     bitrate?: int<1, 8500000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
