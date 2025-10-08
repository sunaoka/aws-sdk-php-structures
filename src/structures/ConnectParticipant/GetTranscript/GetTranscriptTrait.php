<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\GetTranscript;

trait GetTranscriptTrait
{
    /**
     * @param GetTranscriptRequest $args
     * @return GetTranscriptResponse
     */
    public function getTranscript(GetTranscriptRequest $args)
    {
        $result = parent::getTranscript($args->toArray());
        return new GetTranscriptResponse($result->toArray());
    }
}
