<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopLabelingJob;

trait StopLabelingJobTrait
{
    /**
     * @param StopLabelingJobRequest $args
     * @return void
     */
    public function stopLabelingJob(StopLabelingJobRequest $args)
    {
        parent::stopLabelingJob($args->toArray());
    }
}
