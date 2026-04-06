<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListMedicalScribeJobs;

trait ListMedicalScribeJobsTrait
{
    /**
     * @param ListMedicalScribeJobsRequest $args
     * @return ListMedicalScribeJobsResponse
     */
    public function listMedicalScribeJobs(ListMedicalScribeJobsRequest $args)
    {
        $result = parent::listMedicalScribeJobs($args->toArray());
        return new ListMedicalScribeJobsResponse($result->toArray());
    }
}
