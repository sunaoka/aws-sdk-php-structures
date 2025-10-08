<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteOptimizationJob;

trait DeleteOptimizationJobTrait
{
    /**
     * @param DeleteOptimizationJobRequest $args
     * @return void
     */
    public function deleteOptimizationJob(DeleteOptimizationJobRequest $args)
    {
        parent::deleteOptimizationJob($args->toArray());
    }
}
