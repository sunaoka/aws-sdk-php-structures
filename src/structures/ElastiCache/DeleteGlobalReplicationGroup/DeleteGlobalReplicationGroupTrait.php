<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteGlobalReplicationGroup;

trait DeleteGlobalReplicationGroupTrait
{
    /**
     * @param DeleteGlobalReplicationGroupRequest $args
     * @return DeleteGlobalReplicationGroupResponse
     */
    public function deleteGlobalReplicationGroup(DeleteGlobalReplicationGroupRequest $args)
    {
        $result = parent::deleteGlobalReplicationGroup($args->toArray());
        return new DeleteGlobalReplicationGroupResponse($result->toArray());
    }
}
