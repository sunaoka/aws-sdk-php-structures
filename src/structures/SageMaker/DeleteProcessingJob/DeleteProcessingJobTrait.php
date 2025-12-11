<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteProcessingJob;

trait DeleteProcessingJobTrait
{
    /**
     * @param DeleteProcessingJobRequest $args
     * @return void
     */
    public function deleteProcessingJob(DeleteProcessingJobRequest $args)
    {
        parent::deleteProcessingJob($args->toArray());
    }
}
