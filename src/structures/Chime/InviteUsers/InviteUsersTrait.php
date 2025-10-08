<?php

namespace Sunaoka\Aws\Structures\Chime\InviteUsers;

trait InviteUsersTrait
{
    /**
     * @param InviteUsersRequest $args
     * @return InviteUsersResponse
     */
    public function inviteUsers(InviteUsersRequest $args)
    {
        $result = parent::inviteUsers($args->toArray());
        return new InviteUsersResponse($result->toArray());
    }
}
