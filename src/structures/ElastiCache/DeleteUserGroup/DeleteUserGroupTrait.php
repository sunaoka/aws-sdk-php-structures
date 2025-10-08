<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteUserGroup;

trait DeleteUserGroupTrait
{
    /**
     * @param DeleteUserGroupRequest $args
     * @return DeleteUserGroupResponse
     */
    public function deleteUserGroup(DeleteUserGroupRequest $args)
    {
        $result = parent::deleteUserGroup($args->toArray());
        return new DeleteUserGroupResponse($result->toArray());
    }
}
