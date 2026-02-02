<?php

namespace Sunaoka\Aws\Structures\Wickr\ListGuestUsers;

trait ListGuestUsersTrait
{
    /**
     * @param ListGuestUsersRequest $args
     * @return ListGuestUsersResponse
     */
    public function listGuestUsers(ListGuestUsersRequest $args)
    {
        $result = parent::listGuestUsers($args->toArray());
        return new ListGuestUsersResponse($result->toArray());
    }
}
