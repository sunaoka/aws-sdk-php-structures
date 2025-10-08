<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateGlobalReplicationGroup;

trait CreateGlobalReplicationGroupTrait
{
    /**
     * @param CreateGlobalReplicationGroupRequest $args
     * @return CreateGlobalReplicationGroupResponse
     */
    public function createGlobalReplicationGroup(CreateGlobalReplicationGroupRequest $args)
    {
        $result = parent::createGlobalReplicationGroup($args->toArray());
        return new CreateGlobalReplicationGroupResponse($result->toArray());
    }
}
