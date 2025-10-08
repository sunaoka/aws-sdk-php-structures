<?php

namespace Sunaoka\Aws\Structures\signer\StartSigningJob;

trait StartSigningJobTrait
{
    /**
     * @param StartSigningJobRequest $args
     * @return StartSigningJobResponse
     */
    public function startSigningJob(StartSigningJobRequest $args)
    {
        $result = parent::startSigningJob($args->toArray());
        return new StartSigningJobResponse($result->toArray());
    }
}
