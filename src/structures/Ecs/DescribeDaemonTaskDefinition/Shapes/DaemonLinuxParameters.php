<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeDaemonTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KernelCapabilities|null $capabilities
 * @property list<Device>|null $devices
 * @property bool|null $initProcessEnabled
 * @property list<Tmpfs>|null $tmpfs
 */
class DaemonLinuxParameters extends Shape
{
    /**
     * @param array{
     *     capabilities?: KernelCapabilities|null,
     *     devices?: list<Device>|null,
     *     initProcessEnabled?: bool|null,
     *     tmpfs?: list<Tmpfs>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
