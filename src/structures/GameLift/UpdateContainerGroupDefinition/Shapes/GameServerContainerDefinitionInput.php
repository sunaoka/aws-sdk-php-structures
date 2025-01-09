<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateContainerGroupDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContainerName
 * @property list<ContainerDependency> $DependsOn
 * @property list<ContainerMountPoint> $MountPoints
 * @property list<ContainerEnvironment> $EnvironmentOverride
 * @property string $ImageUri
 * @property ContainerPortConfiguration $PortConfiguration
 * @property string $ServerSdkVersion
 */
class GameServerContainerDefinitionInput extends Shape
{
    /**
     * @param array{
     *     ContainerName: string,
     *     DependsOn?: list<ContainerDependency>,
     *     MountPoints?: list<ContainerMountPoint>,
     *     EnvironmentOverride?: list<ContainerEnvironment>,
     *     ImageUri: string,
     *     PortConfiguration: ContainerPortConfiguration,
     *     ServerSdkVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
