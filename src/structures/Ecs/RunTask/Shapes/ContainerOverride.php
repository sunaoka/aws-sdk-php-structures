<?php

namespace Sunaoka\Aws\Structures\Ecs\RunTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property list<string>|null $command
 * @property list<KeyValuePair>|null $environment
 * @property list<EnvironmentFile>|null $environmentFiles
 * @property int|null $cpu
 * @property int|null $memory
 * @property int|null $memoryReservation
 * @property list<ResourceRequirement>|null $resourceRequirements
 */
class ContainerOverride extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     command?: list<string>|null,
     *     environment?: list<KeyValuePair>|null,
     *     environmentFiles?: list<EnvironmentFile>|null,
     *     cpu?: int|null,
     *     memory?: int|null,
     *     memoryReservation?: int|null,
     *     resourceRequirements?: list<ResourceRequirement>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
