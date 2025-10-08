<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\StartModelPackagingJob;

trait StartModelPackagingJobTrait
{
    /**
     * @param StartModelPackagingJobRequest $args
     * @return StartModelPackagingJobResponse
     */
    public function startModelPackagingJob(StartModelPackagingJobRequest $args)
    {
        $result = parent::startModelPackagingJob($args->toArray());
        return new StartModelPackagingJobResponse($result->toArray());
    }
}
