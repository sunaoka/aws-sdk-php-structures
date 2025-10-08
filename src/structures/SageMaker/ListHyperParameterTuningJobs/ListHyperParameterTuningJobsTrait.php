<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListHyperParameterTuningJobs;

trait ListHyperParameterTuningJobsTrait
{
    /**
     * @param ListHyperParameterTuningJobsRequest $args
     * @return ListHyperParameterTuningJobsResponse
     */
    public function listHyperParameterTuningJobs(ListHyperParameterTuningJobsRequest $args)
    {
        $result = parent::listHyperParameterTuningJobs($args->toArray());
        return new ListHyperParameterTuningJobsResponse($result->toArray());
    }
}
