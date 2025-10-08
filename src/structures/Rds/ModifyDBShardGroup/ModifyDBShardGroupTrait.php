<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBShardGroup;

trait ModifyDBShardGroupTrait
{
    /**
     * @param ModifyDBShardGroupRequest $args
     * @return ModifyDBShardGroupResponse
     */
    public function modifyDBShardGroup(ModifyDBShardGroupRequest $args)
    {
        $result = parent::modifyDBShardGroup($args->toArray());
        return new ModifyDBShardGroupResponse($result->toArray());
    }
}
