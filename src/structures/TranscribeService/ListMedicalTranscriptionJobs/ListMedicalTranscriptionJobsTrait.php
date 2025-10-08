<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListMedicalTranscriptionJobs;

trait ListMedicalTranscriptionJobsTrait
{
    /**
     * @param ListMedicalTranscriptionJobsRequest $args
     * @return ListMedicalTranscriptionJobsResponse
     */
    public function listMedicalTranscriptionJobs(ListMedicalTranscriptionJobsRequest $args)
    {
        $result = parent::listMedicalTranscriptionJobs($args->toArray());
        return new ListMedicalTranscriptionJobsResponse($result->toArray());
    }
}
