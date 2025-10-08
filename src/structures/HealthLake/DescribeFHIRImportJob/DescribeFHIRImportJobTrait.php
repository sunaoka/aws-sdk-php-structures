<?php

namespace Sunaoka\Aws\Structures\HealthLake\DescribeFHIRImportJob;

trait DescribeFHIRImportJobTrait
{
    /**
     * @param DescribeFHIRImportJobRequest $args
     * @return DescribeFHIRImportJobResponse
     */
    public function describeFHIRImportJob(DescribeFHIRImportJobRequest $args)
    {
        $result = parent::describeFHIRImportJob($args->toArray());
        return new DescribeFHIRImportJobResponse($result->toArray());
    }
}
