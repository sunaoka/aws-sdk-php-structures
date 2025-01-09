<?php

namespace Sunaoka\Aws\Structures\GameLift\ListContainerGroupDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContainerName
 * @property list<ContainerDependency> $DependsOn
 * @property list<ContainerMountPoint> $MountPoints
 * @property list<ContainerEnvironment> $EnvironmentOverride
 * @property string $ImageUri
 * @property ContainerPortConfiguration $PortConfiguration
 * @property string $ResolvedImageDigest
 * @property string $ServerSdkVersion
 */
class GameServerContainerDefinition extends Shape
{
    /**
     * @param array{
     *     ContainerName?: string,
     *     DependsOn?: list<ContainerDependency>,
     *     MountPoints?: list<ContainerMountPoint>,
     *     EnvironmentOverride?: list<ContainerEnvironment>,
     *     ImageUri?: string,
     *     PortConfiguration?: ContainerPortConfiguration,
     *     ResolvedImageDigest?: string,
     *     ServerSdkVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
