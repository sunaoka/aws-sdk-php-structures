<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopEdgePackagingJob;

trait StopEdgePackagingJobTrait
{
    /**
     * @param StopEdgePackagingJobRequest $args
     * @return void
     */
    public function stopEdgePackagingJob(StopEdgePackagingJobRequest $args)
    {
        parent::stopEdgePackagingJob($args->toArray());
    }
}
