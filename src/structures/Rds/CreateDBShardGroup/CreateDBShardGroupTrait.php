<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBShardGroup;

trait CreateDBShardGroupTrait
{
    /**
     * @param CreateDBShardGroupRequest $args
     * @return CreateDBShardGroupResponse
     */
    public function createDBShardGroup(CreateDBShardGroupRequest $args)
    {
        $result = parent::createDBShardGroup($args->toArray());
        return new CreateDBShardGroupResponse($result->toArray());
    }
}
