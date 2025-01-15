<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateContainerGroupDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContainerName
 * @property list<ContainerDependency>|null $DependsOn
 * @property list<ContainerMountPoint>|null $MountPoints
 * @property list<ContainerEnvironment>|null $EnvironmentOverride
 * @property bool|null $Essential
 * @property ContainerHealthCheck|null $HealthCheck
 * @property string $ImageUri
 * @property int<4, 1024000>|null $MemoryHardLimitMebibytes
 * @property ContainerPortConfiguration|null $PortConfiguration
 * @property double|null $Vcpu
 */
class SupportContainerDefinitionInput extends Shape
{
    /**
     * @param array{
     *     ContainerName: string,
     *     DependsOn?: list<ContainerDependency>|null,
     *     MountPoints?: list<ContainerMountPoint>|null,
     *     EnvironmentOverride?: list<ContainerEnvironment>|null,
     *     Essential?: bool|null,
     *     HealthCheck?: ContainerHealthCheck|null,
     *     ImageUri: string,
     *     MemoryHardLimitMebibytes?: int<4, 1024000>|null,
     *     PortConfiguration?: ContainerPortConfiguration|null,
     *     Vcpu?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
