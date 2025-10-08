<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\ListPHIDetectionJobs;

trait ListPHIDetectionJobsTrait
{
    /**
     * @param ListPHIDetectionJobsRequest $args
     * @return ListPHIDetectionJobsResponse
     */
    public function listPHIDetectionJobs(ListPHIDetectionJobsRequest $args)
    {
        $result = parent::listPHIDetectionJobs($args->toArray());
        return new ListPHIDetectionJobsResponse($result->toArray());
    }
}
