<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateReplicationGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NodeGroupId
 * @property string|null $Slots
 * @property int|null $ReplicaCount
 * @property string|null $PrimaryAvailabilityZone
 * @property list<string>|null $ReplicaAvailabilityZones
 * @property string|null $PrimaryOutpostArn
 * @property list<string>|null $ReplicaOutpostArns
 */
class NodeGroupConfiguration extends Shape
{
    /**
     * @param array{
     *     NodeGroupId?: string|null,
     *     Slots?: string|null,
     *     ReplicaCount?: int|null,
     *     PrimaryAvailabilityZone?: string|null,
     *     ReplicaAvailabilityZones?: list<string>|null,
     *     PrimaryOutpostArn?: string|null,
     *     ReplicaOutpostArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
