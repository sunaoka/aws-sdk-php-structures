<?php

namespace Sunaoka\Aws\Structures\Neptunedata\StartMLDataProcessingJob;

trait StartMLDataProcessingJobTrait
{
    /**
     * @param StartMLDataProcessingJobRequest $args
     * @return StartMLDataProcessingJobResponse
     */
    public function startMLDataProcessingJob(StartMLDataProcessingJobRequest $args)
    {
        $result = parent::startMLDataProcessingJob($args->toArray());
        return new StartMLDataProcessingJobResponse($result->toArray());
    }
}
