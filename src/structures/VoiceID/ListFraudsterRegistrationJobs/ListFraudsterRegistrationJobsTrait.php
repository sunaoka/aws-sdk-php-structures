<?php

namespace Sunaoka\Aws\Structures\VoiceID\ListFraudsterRegistrationJobs;

trait ListFraudsterRegistrationJobsTrait
{
    /**
     * @param ListFraudsterRegistrationJobsRequest $args
     * @return ListFraudsterRegistrationJobsResponse
     */
    public function listFraudsterRegistrationJobs(ListFraudsterRegistrationJobsRequest $args)
    {
        $result = parent::listFraudsterRegistrationJobs($args->toArray());
        return new ListFraudsterRegistrationJobsResponse($result->toArray());
    }
}
