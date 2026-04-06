<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateOptimizationJob;

trait CreateOptimizationJobTrait
{
    /**
     * @param CreateOptimizationJobRequest $args
     * @return CreateOptimizationJobResponse
     */
    public function createOptimizationJob(CreateOptimizationJobRequest $args)
    {
        $result = parent::createOptimizationJob($args->toArray());
        return new CreateOptimizationJobResponse($result->toArray());
    }
}
