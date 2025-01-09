<?php

namespace Sunaoka\Aws\Structures\MemoryDB\FailoverShard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReshardingStatus $Resharding
 * @property ACLsUpdateStatus $ACLs
 * @property list<PendingModifiedServiceUpdate> $ServiceUpdates
 */
class ClusterPendingUpdates extends Shape
{
    /**
     * @param array{
     *     Resharding?: ReshardingStatus,
     *     ACLs?: ACLsUpdateStatus,
     *     ServiceUpdates?: list<PendingModifiedServiceUpdate>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
