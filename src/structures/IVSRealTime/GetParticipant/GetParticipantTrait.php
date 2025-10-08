<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetParticipant;

trait GetParticipantTrait
{
    /**
     * @param GetParticipantRequest $args
     * @return GetParticipantResponse
     */
    public function getParticipant(GetParticipantRequest $args)
    {
        $result = parent::getParticipant($args->toArray());
        return new GetParticipantResponse($result->toArray());
    }
}
