<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetMLModelTrainingJob;

trait GetMLModelTrainingJobTrait
{
    /**
     * @param GetMLModelTrainingJobRequest $args
     * @return GetMLModelTrainingJobResponse
     */
    public function getMLModelTrainingJob(GetMLModelTrainingJobRequest $args)
    {
        $result = parent::getMLModelTrainingJob($args->toArray());
        return new GetMLModelTrainingJobResponse($result->toArray());
    }
}
