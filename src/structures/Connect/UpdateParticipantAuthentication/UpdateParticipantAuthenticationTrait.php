<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateParticipantAuthentication;

trait UpdateParticipantAuthenticationTrait
{
    /**
     * @param UpdateParticipantAuthenticationRequest $args
     * @return UpdateParticipantAuthenticationResponse
     */
    public function updateParticipantAuthentication(UpdateParticipantAuthenticationRequest $args)
    {
        $result = parent::updateParticipantAuthentication($args->toArray());
        return new UpdateParticipantAuthenticationResponse($result->toArray());
    }
}
