<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeContainerGroupDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContainerName
 * @property list<ContainerDependency>|null $DependsOn
 * @property list<ContainerMountPoint>|null $MountPoints
 * @property list<ContainerEnvironment>|null $EnvironmentOverride
 * @property string|null $ImageUri
 * @property ContainerPortConfiguration|null $PortConfiguration
 * @property string|null $ResolvedImageDigest
 * @property string|null $ServerSdkVersion
 */
class GameServerContainerDefinition extends Shape
{
    /**
     * @param array{
     *     ContainerName?: string|null,
     *     DependsOn?: list<ContainerDependency>|null,
     *     MountPoints?: list<ContainerMountPoint>|null,
     *     EnvironmentOverride?: list<ContainerEnvironment>|null,
     *     ImageUri?: string|null,
     *     PortConfiguration?: ContainerPortConfiguration|null,
     *     ResolvedImageDigest?: string|null,
     *     ServerSdkVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
