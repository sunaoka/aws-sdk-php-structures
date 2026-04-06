<?php

namespace Sunaoka\Aws\Structures\Wickr\ListBlockedGuestUsers;

trait ListBlockedGuestUsersTrait
{
    /**
     * @param ListBlockedGuestUsersRequest $args
     * @return ListBlockedGuestUsersResponse
     */
    public function listBlockedGuestUsers(ListBlockedGuestUsersRequest $args)
    {
        $result = parent::listBlockedGuestUsers($args->toArray());
        return new ListBlockedGuestUsersResponse($result->toArray());
    }
}
