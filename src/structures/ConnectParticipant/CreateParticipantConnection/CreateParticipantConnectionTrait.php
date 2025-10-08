<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\CreateParticipantConnection;

trait CreateParticipantConnectionTrait
{
    /**
     * @param CreateParticipantConnectionRequest $args
     * @return CreateParticipantConnectionResponse
     */
    public function createParticipantConnection(CreateParticipantConnectionRequest $args)
    {
        $result = parent::createParticipantConnection($args->toArray());
        return new CreateParticipantConnectionResponse($result->toArray());
    }
}
