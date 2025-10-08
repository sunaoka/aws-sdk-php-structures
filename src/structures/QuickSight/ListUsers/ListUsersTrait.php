<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListUsers;

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
