<?php

namespace Sunaoka\Aws\Structures\VoiceID\ListSpeakerEnrollmentJobs;

trait ListSpeakerEnrollmentJobsTrait
{
    /**
     * @param ListSpeakerEnrollmentJobsRequest $args
     * @return ListSpeakerEnrollmentJobsResponse
     */
    public function listSpeakerEnrollmentJobs(ListSpeakerEnrollmentJobsRequest $args)
    {
        $result = parent::listSpeakerEnrollmentJobs($args->toArray());
        return new ListSpeakerEnrollmentJobsResponse($result->toArray());
    }
}
