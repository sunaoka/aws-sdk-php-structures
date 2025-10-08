<?php

namespace Sunaoka\Aws\Structures\HealthLake\DescribeFHIRExportJob;

trait DescribeFHIRExportJobTrait
{
    /**
     * @param DescribeFHIRExportJobRequest $args
     * @return DescribeFHIRExportJobResponse
     */
    public function describeFHIRExportJob(DescribeFHIRExportJobRequest $args)
    {
        $result = parent::describeFHIRExportJob($args->toArray());
        return new DescribeFHIRExportJobResponse($result->toArray());
    }
}
