<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\DisconnectParticipant;

trait DisconnectParticipantTrait
{
    /**
     * @param DisconnectParticipantRequest $args
     * @return DisconnectParticipantResponse
     */
    public function disconnectParticipant(DisconnectParticipantRequest $args)
    {
        $result = parent::disconnectParticipant($args->toArray());
        return new DisconnectParticipantResponse($result->toArray());
    }
}
