<?php

namespace Sunaoka\Aws\Structures\Iam\ListUsers;

trait ListUsersTrait
{
    /**
     * @param ListUsersRequest $args
     * @return ListUsersResponse
     */
    public function listUsers(ListUsersRequest $args)
    {
        $result = parent::listUsers($args->toArray());
        return new ListUsersResponse($result->toArray());
    }
}
