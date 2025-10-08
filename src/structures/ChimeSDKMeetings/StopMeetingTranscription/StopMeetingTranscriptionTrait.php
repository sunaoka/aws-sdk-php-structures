<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\StopMeetingTranscription;

trait StopMeetingTranscriptionTrait
{
    /**
     * @param StopMeetingTranscriptionRequest $args
     * @return void
     */
    public function stopMeetingTranscription(StopMeetingTranscriptionRequest $args)
    {
        parent::stopMeetingTranscription($args->toArray());
    }
}
