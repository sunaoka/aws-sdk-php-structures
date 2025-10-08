<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListMLModelTrainingJobs;

trait ListMLModelTrainingJobsTrait
{
    /**
     * @param ListMLModelTrainingJobsRequest $args
     * @return ListMLModelTrainingJobsResponse
     */
    public function listMLModelTrainingJobs(ListMLModelTrainingJobsRequest $args)
    {
        $result = parent::listMLModelTrainingJobs($args->toArray());
        return new ListMLModelTrainingJobsResponse($result->toArray());
    }
}
