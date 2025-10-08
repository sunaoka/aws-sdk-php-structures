<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrainingJobs;

trait ListTrainingJobsTrait
{
    /**
     * @param ListTrainingJobsRequest $args
     * @return ListTrainingJobsResponse
     */
    public function listTrainingJobs(ListTrainingJobsRequest $args)
    {
        $result = parent::listTrainingJobs($args->toArray());
        return new ListTrainingJobsResponse($result->toArray());
    }
}
