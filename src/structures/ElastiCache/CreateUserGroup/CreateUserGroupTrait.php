<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateUserGroup;

trait CreateUserGroupTrait
{
    /**
     * @param CreateUserGroupRequest $args
     * @return CreateUserGroupResponse
     */
    public function createUserGroup(CreateUserGroupRequest $args)
    {
        $result = parent::createUserGroup($args->toArray());
        return new CreateUserGroupResponse($result->toArray());
    }
}
