<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateParticipantToken;

trait CreateParticipantTokenTrait
{
    /**
     * @param CreateParticipantTokenRequest $args
     * @return CreateParticipantTokenResponse
     */
    public function createParticipantToken(CreateParticipantTokenRequest $args)
    {
        $result = parent::createParticipantToken($args->toArray());
        return new CreateParticipantTokenResponse($result->toArray());
    }
}
