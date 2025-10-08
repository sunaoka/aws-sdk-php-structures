<?php

namespace Sunaoka\Aws\Structures\VoiceID\StartSpeakerEnrollmentJob;

trait StartSpeakerEnrollmentJobTrait
{
    /**
     * @param StartSpeakerEnrollmentJobRequest $args
     * @return StartSpeakerEnrollmentJobResponse
     */
    public function startSpeakerEnrollmentJob(StartSpeakerEnrollmentJobRequest $args)
    {
        $result = parent::startSpeakerEnrollmentJob($args->toArray());
        return new StartSpeakerEnrollmentJobResponse($result->toArray());
    }
}
