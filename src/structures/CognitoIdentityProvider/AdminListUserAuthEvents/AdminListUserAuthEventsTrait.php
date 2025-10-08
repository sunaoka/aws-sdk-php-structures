<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminListUserAuthEvents;

trait AdminListUserAuthEventsTrait
{
    /**
     * @param AdminListUserAuthEventsRequest $args
     * @return AdminListUserAuthEventsResponse
     */
    public function adminListUserAuthEvents(AdminListUserAuthEventsRequest $args)
    {
        $result = parent::adminListUserAuthEvents($args->toArray());
        return new AdminListUserAuthEventsResponse($result->toArray());
    }
}
