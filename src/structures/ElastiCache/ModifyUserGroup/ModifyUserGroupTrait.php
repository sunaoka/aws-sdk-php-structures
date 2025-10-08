<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyUserGroup;

trait ModifyUserGroupTrait
{
    /**
     * @param ModifyUserGroupRequest $args
     * @return ModifyUserGroupResponse
     */
    public function modifyUserGroup(ModifyUserGroupRequest $args)
    {
        $result = parent::modifyUserGroup($args->toArray());
        return new ModifyUserGroupResponse($result->toArray());
    }
}
