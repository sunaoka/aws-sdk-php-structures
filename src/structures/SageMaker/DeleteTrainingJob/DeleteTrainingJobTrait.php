<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteTrainingJob;

trait DeleteTrainingJobTrait
{
    /**
     * @param DeleteTrainingJobRequest $args
     * @return void
     */
    public function deleteTrainingJob(DeleteTrainingJobRequest $args)
    {
        parent::deleteTrainingJob($args->toArray());
    }
}
