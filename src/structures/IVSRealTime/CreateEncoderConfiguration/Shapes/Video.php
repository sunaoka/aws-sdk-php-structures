<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateEncoderConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $width
 * @property int $height
 * @property float $framerate
 * @property int $bitrate
 */
class Video extends Shape
{
    /**
     * @param array{
     *     width?: int,
     *     height?: int,
     *     framerate?: float,
     *     bitrate?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
