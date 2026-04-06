<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ContainerGroupDefinitionNames
 * @property ConnectionPortRange $ConnectionPortRange
 * @property int<1, 5000>|null $DesiredReplicaContainerGroupsPerInstance
 */
class ContainerGroupsConfiguration extends Shape
{
    /**
     * @param array{
     *     ContainerGroupDefinitionNames: list<string>,
     *     ConnectionPortRange: ConnectionPortRange,
     *     DesiredReplicaContainerGroupsPerInstance?: int<1, 5000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
