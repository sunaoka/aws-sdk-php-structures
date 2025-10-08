<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\StartMeetingTranscription;

trait StartMeetingTranscriptionTrait
{
    /**
     * @param StartMeetingTranscriptionRequest $args
     * @return void
     */
    public function startMeetingTranscription(StartMeetingTranscriptionRequest $args)
    {
        parent::startMeetingTranscription($args->toArray());
    }
}
