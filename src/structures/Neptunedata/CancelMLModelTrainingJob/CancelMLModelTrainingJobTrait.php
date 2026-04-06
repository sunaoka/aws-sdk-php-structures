<?php

namespace Sunaoka\Aws\Structures\Neptunedata\CancelMLModelTrainingJob;

trait CancelMLModelTrainingJobTrait
{
    /**
     * @param CancelMLModelTrainingJobRequest $args
     * @return CancelMLModelTrainingJobResponse
     */
    public function cancelMLModelTrainingJob(CancelMLModelTrainingJobRequest $args)
    {
        $result = parent::cancelMLModelTrainingJob($args->toArray());
        return new CancelMLModelTrainingJobResponse($result->toArray());
    }
}
