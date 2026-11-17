<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\StartMedicalCodingJob;

trait StartMedicalCodingJobTrait
{
    /**
     * @param StartMedicalCodingJobRequest $args
     * @return StartMedicalCodingJobResponse
     */
    public function startMedicalCodingJob(StartMedicalCodingJobRequest $args)
    {
        $result = parent::startMedicalCodingJob($args->toArray());
        return new StartMedicalCodingJobResponse($result->toArray());
    }
}
