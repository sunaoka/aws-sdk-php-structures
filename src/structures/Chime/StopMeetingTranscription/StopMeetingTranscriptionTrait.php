<?php

namespace Sunaoka\Aws\Structures\Chime\StopMeetingTranscription;

trait StopMeetingTranscriptionTrait
{
    /**
     * @param StopMeetingTranscriptionRequest $args
     * @return StopMeetingTranscriptionResponse
     */
    public function stopMeetingTranscription(StopMeetingTranscriptionRequest $args)
    {
        $result = parent::stopMeetingTranscription($args->toArray());
        return new StopMeetingTranscriptionResponse($result->toArray());
    }
}
