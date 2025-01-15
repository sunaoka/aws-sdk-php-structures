<?php

namespace Sunaoka\Aws\Structures\Ecs\RegisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KernelCapabilities|null $capabilities
 * @property list<Device>|null $devices
 * @property bool|null $initProcessEnabled
 * @property int|null $sharedMemorySize
 * @property list<Tmpfs>|null $tmpfs
 * @property int|null $maxSwap
 * @property int|null $swappiness
 */
class LinuxParameters extends Shape
{
    /**
     * @param array{
     *     capabilities?: KernelCapabilities|null,
     *     devices?: list<Device>|null,
     *     initProcessEnabled?: bool|null,
     *     sharedMemorySize?: int|null,
     *     tmpfs?: list<Tmpfs>|null,
     *     maxSwap?: int|null,
     *     swappiness?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
