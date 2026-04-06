<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateContainerGroupDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContainerName
 * @property string $ImageUri
 * @property ContainerMemoryLimits|null $MemoryLimits
 * @property ContainerPortConfiguration|null $PortConfiguration
 * @property int<1, 10240>|null $Cpu
 * @property ContainerHealthCheck|null $HealthCheck
 * @property list<string>|null $Command
 * @property bool|null $Essential
 * @property list<string>|null $EntryPoint
 * @property string|null $WorkingDirectory
 * @property list<ContainerEnvironment>|null $Environment
 * @property list<ContainerDependency>|null $DependsOn
 */
class ContainerDefinitionInput extends Shape
{
    /**
     * @param array{
     *     ContainerName: string,
     *     ImageUri: string,
     *     MemoryLimits?: ContainerMemoryLimits|null,
     *     PortConfiguration?: ContainerPortConfiguration|null,
     *     Cpu?: int<1, 10240>|null,
     *     HealthCheck?: ContainerHealthCheck|null,
     *     Command?: list<string>|null,
     *     Essential?: bool|null,
     *     EntryPoint?: list<string>|null,
     *     WorkingDirectory?: string|null,
     *     Environment?: list<ContainerEnvironment>|null,
     *     DependsOn?: list<ContainerDependency>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
