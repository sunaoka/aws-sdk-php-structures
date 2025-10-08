<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopProcessingJob;

trait StopProcessingJobTrait
{
    /**
     * @param StopProcessingJobRequest $args
     * @return void
     */
    public function stopProcessingJob(StopProcessingJobRequest $args)
    {
        parent::stopProcessingJob($args->toArray());
    }
}
