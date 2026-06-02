<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateJob;

trait CreateJobTrait
{
    /**
     * @param CreateJobRequest $args
     * @return CreateJobResponse
     */
    public function createJob(CreateJobRequest $args)
    {
        $result = parent::createJob($args->toArray());
        return new CreateJobResponse($result->toArray());
    }
}
