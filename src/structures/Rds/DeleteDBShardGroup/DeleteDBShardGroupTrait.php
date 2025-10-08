<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBShardGroup;

trait DeleteDBShardGroupTrait
{
    /**
     * @param DeleteDBShardGroupRequest $args
     * @return DeleteDBShardGroupResponse
     */
    public function deleteDBShardGroup(DeleteDBShardGroupRequest $args)
    {
        $result = parent::deleteDBShardGroup($args->toArray());
        return new DeleteDBShardGroupResponse($result->toArray());
    }
}
