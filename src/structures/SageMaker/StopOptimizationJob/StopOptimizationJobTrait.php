<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopOptimizationJob;

trait StopOptimizationJobTrait
{
    /**
     * @param StopOptimizationJobRequest $args
     * @return void
     */
    public function stopOptimizationJob(StopOptimizationJobRequest $args)
    {
        parent::stopOptimizationJob($args->toArray());
    }
}
