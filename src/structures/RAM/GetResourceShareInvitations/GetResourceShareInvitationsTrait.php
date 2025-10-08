<?php

namespace Sunaoka\Aws\Structures\RAM\GetResourceShareInvitations;

trait GetResourceShareInvitationsTrait
{
    /**
     * @param GetResourceShareInvitationsRequest $args
     * @return GetResourceShareInvitationsResponse
     */
    public function getResourceShareInvitations(GetResourceShareInvitationsRequest $args)
    {
        $result = parent::getResourceShareInvitations($args->toArray());
        return new GetResourceShareInvitationsResponse($result->toArray());
    }
}
