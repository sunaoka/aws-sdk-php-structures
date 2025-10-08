<?php

namespace Sunaoka\Aws\Structures\ElastiCache\RebalanceSlotsInGlobalReplicationGroup;

trait RebalanceSlotsInGlobalReplicationGroupTrait
{
    /**
     * @param RebalanceSlotsInGlobalReplicationGroupRequest $args
     * @return RebalanceSlotsInGlobalReplicationGroupResponse
     */
    public function rebalanceSlotsInGlobalReplicationGroup(RebalanceSlotsInGlobalReplicationGroupRequest $args)
    {
        $result = parent::rebalanceSlotsInGlobalReplicationGroup($args->toArray());
        return new RebalanceSlotsInGlobalReplicationGroupResponse($result->toArray());
    }
}
