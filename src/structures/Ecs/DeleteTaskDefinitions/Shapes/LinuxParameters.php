<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteTaskDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KernelCapabilities $capabilities
 * @property list<Device> $devices
 * @property bool $initProcessEnabled
 * @property int $sharedMemorySize
 * @property list<Tmpfs> $tmpfs
 * @property int $maxSwap
 * @property int $swappiness
 */
class LinuxParameters extends Shape
{
    /**
     * @param array{
     *     capabilities?: KernelCapabilities,
     *     devices?: list<Device>,
     *     initProcessEnabled?: bool,
     *     sharedMemorySize?: int,
     *     tmpfs?: list<Tmpfs>,
     *     maxSwap?: int,
     *     swappiness?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
