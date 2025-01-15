<?php

namespace Sunaoka\Aws\Structures\ElastiCache\IncreaseNodeGroupsInGlobalReplicationGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NodeGroupId
 * @property list<string>|null $PreferredAvailabilityZones
 */
class ReshardingConfiguration extends Shape
{
    /**
     * @param array{
     *     NodeGroupId?: string|null,
     *     PreferredAvailabilityZones?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
