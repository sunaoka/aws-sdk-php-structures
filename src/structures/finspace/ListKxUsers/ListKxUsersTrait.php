<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxUsers;

trait ListKxUsersTrait
{
    /**
     * @param ListKxUsersRequest $args
     * @return ListKxUsersResponse
     */
    public function listKxUsers(ListKxUsersRequest $args)
    {
        $result = parent::listKxUsers($args->toArray());
        return new ListKxUsersResponse($result->toArray());
    }
}
