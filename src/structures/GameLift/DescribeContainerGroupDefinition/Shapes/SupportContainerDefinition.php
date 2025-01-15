<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeContainerGroupDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContainerName
 * @property list<ContainerDependency>|null $DependsOn
 * @property list<ContainerMountPoint>|null $MountPoints
 * @property list<ContainerEnvironment>|null $EnvironmentOverride
 * @property bool|null $Essential
 * @property ContainerHealthCheck|null $HealthCheck
 * @property string|null $ImageUri
 * @property int<4, 1024000>|null $MemoryHardLimitMebibytes
 * @property ContainerPortConfiguration|null $PortConfiguration
 * @property string|null $ResolvedImageDigest
 * @property double|null $Vcpu
 */
class SupportContainerDefinition extends Shape
{
    /**
     * @param array{
     *     ContainerName?: string|null,
     *     DependsOn?: list<ContainerDependency>|null,
     *     MountPoints?: list<ContainerMountPoint>|null,
     *     EnvironmentOverride?: list<ContainerEnvironment>|null,
     *     Essential?: bool|null,
     *     HealthCheck?: ContainerHealthCheck|null,
     *     ImageUri?: string|null,
     *     MemoryHardLimitMebibytes?: int<4, 1024000>|null,
     *     PortConfiguration?: ContainerPortConfiguration|null,
     *     ResolvedImageDigest?: string|null,
     *     Vcpu?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
