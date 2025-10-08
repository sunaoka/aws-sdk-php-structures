<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateTrainingJob;

trait UpdateTrainingJobTrait
{
    /**
     * @param UpdateTrainingJobRequest $args
     * @return UpdateTrainingJobResponse
     */
    public function updateTrainingJob(UpdateTrainingJobRequest $args)
    {
        $result = parent::updateTrainingJob($args->toArray());
        return new UpdateTrainingJobResponse($result->toArray());
    }
}
