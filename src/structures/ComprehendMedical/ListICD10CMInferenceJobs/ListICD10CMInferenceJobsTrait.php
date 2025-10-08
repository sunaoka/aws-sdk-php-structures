<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\ListICD10CMInferenceJobs;

trait ListICD10CMInferenceJobsTrait
{
    /**
     * @param ListICD10CMInferenceJobsRequest $args
     * @return ListICD10CMInferenceJobsResponse
     */
    public function listICD10CMInferenceJobs(ListICD10CMInferenceJobsRequest $args)
    {
        $result = parent::listICD10CMInferenceJobs($args->toArray());
        return new ListICD10CMInferenceJobsResponse($result->toArray());
    }
}
