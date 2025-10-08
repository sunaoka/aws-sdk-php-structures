<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyReplicationGroup;

trait ModifyReplicationGroupTrait
{
    /**
     * @param ModifyReplicationGroupRequest $args
     * @return ModifyReplicationGroupResponse
     */
    public function modifyReplicationGroup(ModifyReplicationGroupRequest $args)
    {
        $result = parent::modifyReplicationGroup($args->toArray());
        return new ModifyReplicationGroupResponse($result->toArray());
    }
}
