<?php

namespace Sunaoka\Aws\Structures\ElastiCache\IncreaseNodeGroupsInGlobalReplicationGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReplicationGroupId
 * @property string $ReplicationGroupRegion
 * @property list<ReshardingConfiguration> $ReshardingConfiguration
 */
class RegionalConfiguration extends Shape
{
    /**
     * @param array{
     *     ReplicationGroupId: string,
     *     ReplicationGroupRegion: string,
     *     ReshardingConfiguration: list<ReshardingConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
