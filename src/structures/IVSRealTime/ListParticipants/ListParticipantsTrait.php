<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListParticipants;

trait ListParticipantsTrait
{
    /**
     * @param ListParticipantsRequest $args
     * @return ListParticipantsResponse
     */
    public function listParticipants(ListParticipantsRequest $args)
    {
        $result = parent::listParticipants($args->toArray());
        return new ListParticipantsResponse($result->toArray());
    }
}
