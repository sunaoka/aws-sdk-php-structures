<?php

namespace Sunaoka\Aws\Structures\Chime\StartMeetingTranscription;

trait StartMeetingTranscriptionTrait
{
    /**
     * @param StartMeetingTranscriptionRequest $args
     * @return StartMeetingTranscriptionResponse
     */
    public function startMeetingTranscription(StartMeetingTranscriptionRequest $args)
    {
        $result = parent::startMeetingTranscription($args->toArray());
        return new StartMeetingTranscriptionResponse($result->toArray());
    }
}
