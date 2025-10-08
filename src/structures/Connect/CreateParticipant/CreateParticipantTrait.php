<?php

namespace Sunaoka\Aws\Structures\Connect\CreateParticipant;

trait CreateParticipantTrait
{
    /**
     * @param CreateParticipantRequest $args
     * @return CreateParticipantResponse
     */
    public function createParticipant(CreateParticipantRequest $args)
    {
        $result = parent::createParticipant($args->toArray());
        return new CreateParticipantResponse($result->toArray());
    }
}
