<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopTrainingJob;

trait StopTrainingJobTrait
{
    /**
     * @param StopTrainingJobRequest $args
     * @return void
     */
    public function stopTrainingJob(StopTrainingJobRequest $args)
    {
        parent::stopTrainingJob($args->toArray());
    }
}
