<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateEncoderConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<2, 1920>|null $width
 * @property int<2, 1920>|null $height
 * @property float|null $framerate
 * @property int<1, 8500000>|null $bitrate
 */
class Video extends Shape
{
    /**
     * @param array{
     *     width?: int<2, 1920>|null,
     *     height?: int<2, 1920>|null,
     *     framerate?: float|null,
     *     bitrate?: int<1, 8500000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
