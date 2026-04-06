<?php

namespace Sunaoka\Aws\Structures\Rds\RebootDBShardGroup;

trait RebootDBShardGroupTrait
{
    /**
     * @param RebootDBShardGroupRequest $args
     * @return RebootDBShardGroupResponse
     */
    public function rebootDBShardGroup(RebootDBShardGroupRequest $args)
    {
        $result = parent::rebootDBShardGroup($args->toArray());
        return new RebootDBShardGroupResponse($result->toArray());
    }
}
