<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\SendInvitation;

trait SendInvitationTrait
{
    /**
     * @param SendInvitationRequest $args
     * @return SendInvitationResponse
     */
    public function sendInvitation(SendInvitationRequest $args)
    {
        $result = parent::sendInvitation($args->toArray());
        return new SendInvitationResponse($result->toArray());
    }
}
