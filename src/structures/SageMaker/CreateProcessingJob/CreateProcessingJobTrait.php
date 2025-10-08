<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateProcessingJob;

trait CreateProcessingJobTrait
{
    /**
     * @param CreateProcessingJobRequest $args
     * @return CreateProcessingJobResponse
     */
    public function createProcessingJob(CreateProcessingJobRequest $args)
    {
        $result = parent::createProcessingJob($args->toArray());
        return new CreateProcessingJobResponse($result->toArray());
    }
}
