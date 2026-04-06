<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 5000>|null $DesiredReplicaContainerGroupsPerInstance
 * @property int<1, 5000>|null $MaxReplicaContainerGroupsPerInstance
 */
class ContainerGroupsPerInstance extends Shape
{
    /**
     * @param array{
     *     DesiredReplicaContainerGroupsPerInstance?: int<1, 5000>|null,
     *     MaxReplicaContainerGroupsPerInstance?: int<1, 5000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
