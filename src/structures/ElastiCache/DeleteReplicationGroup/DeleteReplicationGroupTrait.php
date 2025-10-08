<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteReplicationGroup;

trait DeleteReplicationGroupTrait
{
    /**
     * @param DeleteReplicationGroupRequest $args
     * @return DeleteReplicationGroupResponse
     */
    public function deleteReplicationGroup(DeleteReplicationGroupRequest $args)
    {
        $result = parent::deleteReplicationGroup($args->toArray());
        return new DeleteReplicationGroupResponse($result->toArray());
    }
}
