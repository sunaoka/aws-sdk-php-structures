<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyReplicationGroupShardConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SlotMigration $SlotMigration
 */
class ReshardingStatus extends Shape
{
    /**
     * @param array{SlotMigration?: SlotMigration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
