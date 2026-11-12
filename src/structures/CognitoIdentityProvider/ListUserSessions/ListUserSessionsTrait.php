<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUserSessions;

trait ListUserSessionsTrait
{
    /**
     * @param ListUserSessionsRequest $args
     * @return ListUserSessionsResponse
     */
    public function listUserSessions(ListUserSessionsRequest $args)
    {
        $result = parent::listUserSessions($args->toArray());
        return new ListUserSessionsResponse($result->toArray());
    }
}
