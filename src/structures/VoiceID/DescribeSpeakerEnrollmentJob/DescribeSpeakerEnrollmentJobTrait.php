<?php

namespace Sunaoka\Aws\Structures\VoiceID\DescribeSpeakerEnrollmentJob;

trait DescribeSpeakerEnrollmentJobTrait
{
    /**
     * @param DescribeSpeakerEnrollmentJobRequest $args
     * @return DescribeSpeakerEnrollmentJobResponse
     */
    public function describeSpeakerEnrollmentJob(DescribeSpeakerEnrollmentJobRequest $args)
    {
        $result = parent::describeSpeakerEnrollmentJob($args->toArray());
        return new DescribeSpeakerEnrollmentJobResponse($result->toArray());
    }
}
