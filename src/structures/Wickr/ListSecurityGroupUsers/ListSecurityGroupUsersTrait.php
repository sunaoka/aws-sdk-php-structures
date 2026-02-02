<?php

namespace Sunaoka\Aws\Structures\Wickr\ListSecurityGroupUsers;

trait ListSecurityGroupUsersTrait
{
    /**
     * @param ListSecurityGroupUsersRequest $args
     * @return ListSecurityGroupUsersResponse
     */
    public function listSecurityGroupUsers(ListSecurityGroupUsersRequest $args)
    {
        $result = parent::listSecurityGroupUsers($args->toArray());
        return new ListSecurityGroupUsersResponse($result->toArray());
    }
}
