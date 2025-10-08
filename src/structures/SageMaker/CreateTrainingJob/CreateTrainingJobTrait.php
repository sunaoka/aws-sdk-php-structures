<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrainingJob;

trait CreateTrainingJobTrait
{
    /**
     * @param CreateTrainingJobRequest $args
     * @return CreateTrainingJobResponse
     */
    public function createTrainingJob(CreateTrainingJobRequest $args)
    {
        $result = parent::createTrainingJob($args->toArray());
        return new CreateTrainingJobResponse($result->toArray());
    }
}
