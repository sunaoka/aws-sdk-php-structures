<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminListUserSessions;

trait AdminListUserSessionsTrait
{
    /**
     * @param AdminListUserSessionsRequest $args
     * @return AdminListUserSessionsResponse
     */
    public function adminListUserSessions(AdminListUserSessionsRequest $args)
    {
        $result = parent::adminListUserSessions($args->toArray());
        return new AdminListUserSessionsResponse($result->toArray());
    }
}
