<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListDeploymentJobs;

trait ListDeploymentJobsTrait
{
    /**
     * @param ListDeploymentJobsRequest $args
     * @return ListDeploymentJobsResponse
     */
    public function listDeploymentJobs(ListDeploymentJobsRequest $args)
    {
        $result = parent::listDeploymentJobs($args->toArray());
        return new ListDeploymentJobsResponse($result->toArray());
    }
}
