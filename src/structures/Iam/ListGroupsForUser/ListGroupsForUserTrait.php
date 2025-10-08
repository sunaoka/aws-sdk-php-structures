<?php

namespace Sunaoka\Aws\Structures\Iam\ListGroupsForUser;

trait ListGroupsForUserTrait
{
    /**
     * @param ListGroupsForUserRequest $args
     * @return ListGroupsForUserResponse
     */
    public function listGroupsForUser(ListGroupsForUserRequest $args)
    {
        $result = parent::listGroupsForUser($args->toArray());
        return new ListGroupsForUserResponse($result->toArray());
    }
}
