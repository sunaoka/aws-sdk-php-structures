<?php

namespace Sunaoka\Aws\Structures\ElastiCache\IncreaseNodeGroupsInGlobalReplicationGroup;

trait IncreaseNodeGroupsInGlobalReplicationGroupTrait
{
    /**
     * @param IncreaseNodeGroupsInGlobalReplicationGroupRequest $args
     * @return IncreaseNodeGroupsInGlobalReplicationGroupResponse
     */
    public function increaseNodeGroupsInGlobalReplicationGroup(IncreaseNodeGroupsInGlobalReplicationGroupRequest $args)
    {
        $result = parent::increaseNodeGroupsInGlobalReplicationGroup($args->toArray());
        return new IncreaseNodeGroupsInGlobalReplicationGroupResponse($result->toArray());
    }
}
