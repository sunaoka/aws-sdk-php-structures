<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListTranscriptionJobs;

trait ListTranscriptionJobsTrait
{
    /**
     * @param ListTranscriptionJobsRequest $args
     * @return ListTranscriptionJobsResponse
     */
    public function listTranscriptionJobs(ListTranscriptionJobsRequest $args)
    {
        $result = parent::listTranscriptionJobs($args->toArray());
        return new ListTranscriptionJobsResponse($result->toArray());
    }
}
