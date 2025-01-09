<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyReplicationGroupShardConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NodeGroupId
 * @property list<string> $PreferredAvailabilityZones
 */
class ReshardingConfiguration extends Shape
{
    /**
     * @param array{
     *     NodeGroupId?: string,
     *     PreferredAvailabilityZones?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
