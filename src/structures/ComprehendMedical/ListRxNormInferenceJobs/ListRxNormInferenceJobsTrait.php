<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\ListRxNormInferenceJobs;

trait ListRxNormInferenceJobsTrait
{
    /**
     * @param ListRxNormInferenceJobsRequest $args
     * @return ListRxNormInferenceJobsResponse
     */
    public function listRxNormInferenceJobs(ListRxNormInferenceJobsRequest $args)
    {
        $result = parent::listRxNormInferenceJobs($args->toArray());
        return new ListRxNormInferenceJobsResponse($result->toArray());
    }
}
