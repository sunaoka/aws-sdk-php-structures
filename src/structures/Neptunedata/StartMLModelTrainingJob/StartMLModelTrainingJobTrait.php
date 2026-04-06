<?php

namespace Sunaoka\Aws\Structures\Neptunedata\StartMLModelTrainingJob;

trait StartMLModelTrainingJobTrait
{
    /**
     * @param StartMLModelTrainingJobRequest $args
     * @return StartMLModelTrainingJobResponse
     */
    public function startMLModelTrainingJob(StartMLModelTrainingJobRequest $args)
    {
        $result = parent::startMLModelTrainingJob($args->toArray());
        return new StartMLModelTrainingJobResponse($result->toArray());
    }
}
