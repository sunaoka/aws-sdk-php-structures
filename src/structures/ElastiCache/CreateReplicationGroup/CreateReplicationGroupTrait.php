<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateReplicationGroup;

trait CreateReplicationGroupTrait
{
    /**
     * @param CreateReplicationGroupRequest $args
     * @return CreateReplicationGroupResponse
     */
    public function createReplicationGroup(CreateReplicationGroupRequest $args)
    {
        $result = parent::createReplicationGroup($args->toArray());
        return new CreateReplicationGroupResponse($result->toArray());
    }
}
