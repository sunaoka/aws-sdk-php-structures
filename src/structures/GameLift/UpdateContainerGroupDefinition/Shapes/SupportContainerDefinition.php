<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateContainerGroupDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContainerName
 * @property list<ContainerDependency> $DependsOn
 * @property list<ContainerMountPoint> $MountPoints
 * @property list<ContainerEnvironment> $EnvironmentOverride
 * @property bool $Essential
 * @property ContainerHealthCheck $HealthCheck
 * @property string $ImageUri
 * @property int $MemoryHardLimitMebibytes
 * @property ContainerPortConfiguration $PortConfiguration
 * @property string $ResolvedImageDigest
 * @property double $Vcpu
 */
class SupportContainerDefinition extends Shape
{
    /**
     * @param array{
     *     ContainerName?: string,
     *     DependsOn?: list<ContainerDependency>,
     *     MountPoints?: list<ContainerMountPoint>,
     *     EnvironmentOverride?: list<ContainerEnvironment>,
     *     Essential?: bool,
     *     HealthCheck?: ContainerHealthCheck,
     *     ImageUri?: string,
     *     MemoryHardLimitMebibytes?: int,
     *     PortConfiguration?: ContainerPortConfiguration,
     *     ResolvedImageDigest?: string,
     *     Vcpu?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
