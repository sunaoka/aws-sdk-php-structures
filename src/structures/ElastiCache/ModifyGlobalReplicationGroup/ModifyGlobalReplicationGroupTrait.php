<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyGlobalReplicationGroup;

trait ModifyGlobalReplicationGroupTrait
{
    /**
     * @param ModifyGlobalReplicationGroupRequest $args
     * @return ModifyGlobalReplicationGroupResponse
     */
    public function modifyGlobalReplicationGroup(ModifyGlobalReplicationGroupRequest $args)
    {
        $result = parent::modifyGlobalReplicationGroup($args->toArray());
        return new ModifyGlobalReplicationGroupResponse($result->toArray());
    }
}
