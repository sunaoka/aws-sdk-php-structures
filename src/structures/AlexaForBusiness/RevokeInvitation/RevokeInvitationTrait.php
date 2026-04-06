<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\RevokeInvitation;

trait RevokeInvitationTrait
{
    /**
     * @param RevokeInvitationRequest $args
     * @return RevokeInvitationResponse
     */
    public function revokeInvitation(RevokeInvitationRequest $args)
    {
        $result = parent::revokeInvitation($args->toArray());
        return new RevokeInvitationResponse($result->toArray());
    }
}
