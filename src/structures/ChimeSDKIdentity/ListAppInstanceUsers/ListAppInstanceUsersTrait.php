<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\ListAppInstanceUsers;

trait ListAppInstanceUsersTrait
{
    /**
     * @param ListAppInstanceUsersRequest $args
     * @return ListAppInstanceUsersResponse
     */
    public function listAppInstanceUsers(ListAppInstanceUsersRequest $args)
    {
        $result = parent::listAppInstanceUsers($args->toArray());
        return new ListAppInstanceUsersResponse($result->toArray());
    }
}
