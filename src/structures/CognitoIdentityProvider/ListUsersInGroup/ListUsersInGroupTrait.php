<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUsersInGroup;

trait ListUsersInGroupTrait
{
    /**
     * @param ListUsersInGroupRequest $args
     * @return ListUsersInGroupResponse
     */
    public function listUsersInGroup(ListUsersInGroupRequest $args)
    {
        $result = parent::listUsersInGroup($args->toArray());
        return new ListUsersInGroupResponse($result->toArray());
    }
}
