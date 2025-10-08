<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DeclineInvitations;

trait DeclineInvitationsTrait
{
    /**
     * @param DeclineInvitationsRequest $args
     * @return DeclineInvitationsResponse
     */
    public function declineInvitations(DeclineInvitationsRequest $args)
    {
        $result = parent::declineInvitations($args->toArray());
        return new DeclineInvitationsResponse($result->toArray());
    }
}
