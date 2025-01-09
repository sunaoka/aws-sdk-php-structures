<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NodeGroupId
 * @property string $Slots
 * @property int $ReplicaCount
 * @property string $PrimaryAvailabilityZone
 * @property list<string> $ReplicaAvailabilityZones
 * @property string $PrimaryOutpostArn
 * @property list<string> $ReplicaOutpostArns
 */
class NodeGroupConfiguration extends Shape
{
    /**
     * @param array{
     *     NodeGroupId?: string,
     *     Slots?: string,
     *     ReplicaCount?: int,
     *     PrimaryAvailabilityZone?: string,
     *     ReplicaAvailabilityZones?: list<string>,
     *     PrimaryOutpostArn?: string,
     *     ReplicaOutpostArns?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
