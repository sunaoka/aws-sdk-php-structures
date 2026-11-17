<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetMedicalCodingJob;

trait GetMedicalCodingJobTrait
{
    /**
     * @param GetMedicalCodingJobRequest $args
     * @return GetMedicalCodingJobResponse
     */
    public function getMedicalCodingJob(GetMedicalCodingJobRequest $args)
    {
        $result = parent::getMedicalCodingJob($args->toArray());
        return new GetMedicalCodingJobResponse($result->toArray());
    }
}
