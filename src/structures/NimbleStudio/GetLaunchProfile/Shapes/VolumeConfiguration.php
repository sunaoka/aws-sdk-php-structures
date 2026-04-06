<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetLaunchProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<3000, 16000>|null $iops
 * @property int<100, 16000>|null $size
 * @property int<125, 1000>|null $throughput
 */
class VolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     iops?: int<3000, 16000>|null,
     *     size?: int<100, 16000>|null,
     *     throughput?: int<125, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
