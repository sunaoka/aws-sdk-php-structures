<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetMLDataProcessingJob;

trait GetMLDataProcessingJobTrait
{
    /**
     * @param GetMLDataProcessingJobRequest $args
     * @return GetMLDataProcessingJobResponse
     */
    public function getMLDataProcessingJob(GetMLDataProcessingJobRequest $args)
    {
        $result = parent::getMLDataProcessingJob($args->toArray());
        return new GetMLDataProcessingJobResponse($result->toArray());
    }
}
