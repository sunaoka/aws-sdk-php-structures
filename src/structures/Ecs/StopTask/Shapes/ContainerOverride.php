<?php

namespace Sunaoka\Aws\Structures\Ecs\StopTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property list<string> $command
 * @property list<KeyValuePair> $environment
 * @property list<EnvironmentFile> $environmentFiles
 * @property int $cpu
 * @property int $memory
 * @property int $memoryReservation
 * @property list<ResourceRequirement> $resourceRequirements
 */
class ContainerOverride extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     command?: list<string>,
     *     environment?: list<KeyValuePair>,
     *     environmentFiles?: list<EnvironmentFile>,
     *     cpu?: int,
     *     memory?: int,
     *     memoryReservation?: int,
     *     resourceRequirements?: list<ResourceRequirement>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
