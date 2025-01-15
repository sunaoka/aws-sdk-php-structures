<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateContainerGroupDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContainerName
 * @property list<ContainerDependency>|null $DependsOn
 * @property list<ContainerMountPoint>|null $MountPoints
 * @property list<ContainerEnvironment>|null $EnvironmentOverride
 * @property string $ImageUri
 * @property ContainerPortConfiguration $PortConfiguration
 * @property string $ServerSdkVersion
 */
class GameServerContainerDefinitionInput extends Shape
{
    /**
     * @param array{
     *     ContainerName: string,
     *     DependsOn?: list<ContainerDependency>|null,
     *     MountPoints?: list<ContainerMountPoint>|null,
     *     EnvironmentOverride?: list<ContainerEnvironment>|null,
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
