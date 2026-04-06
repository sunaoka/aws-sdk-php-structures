<?php

namespace Sunaoka\Aws\Structures\Neptunedata\CancelMLDataProcessingJob;

trait CancelMLDataProcessingJobTrait
{
    /**
     * @param CancelMLDataProcessingJobRequest $args
     * @return CancelMLDataProcessingJobResponse
     */
    public function cancelMLDataProcessingJob(CancelMLDataProcessingJobRequest $args)
    {
        $result = parent::cancelMLDataProcessingJob($args->toArray());
        return new CancelMLDataProcessingJobResponse($result->toArray());
    }
}
