<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\CancelParticipantAuthentication;

trait CancelParticipantAuthenticationTrait
{
    /**
     * @param CancelParticipantAuthenticationRequest $args
     * @return CancelParticipantAuthenticationResponse
     */
    public function cancelParticipantAuthentication(CancelParticipantAuthenticationRequest $args)
    {
        $result = parent::cancelParticipantAuthentication($args->toArray());
        return new CancelParticipantAuthenticationResponse($result->toArray());
    }
}
