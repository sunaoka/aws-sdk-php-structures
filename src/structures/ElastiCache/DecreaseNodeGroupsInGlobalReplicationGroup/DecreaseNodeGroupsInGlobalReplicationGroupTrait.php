<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DecreaseNodeGroupsInGlobalReplicationGroup;

trait DecreaseNodeGroupsInGlobalReplicationGroupTrait
{
    /**
     * @param DecreaseNodeGroupsInGlobalReplicationGroupRequest $args
     * @return DecreaseNodeGroupsInGlobalReplicationGroupResponse
     */
    public function decreaseNodeGroupsInGlobalReplicationGroup(
        DecreaseNodeGroupsInGlobalReplicationGroupRequest $args,
    ) {
        $result = parent::decreaseNodeGroupsInGlobalReplicationGroup($args->toArray());
        return new DecreaseNodeGroupsInGlobalReplicationGroupResponse($result->toArray());
    }
}
