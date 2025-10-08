<?php

namespace Sunaoka\Aws\Structures\HealthLake\StartFHIRExportJob;

trait StartFHIRExportJobTrait
{
    /**
     * @param StartFHIRExportJobRequest $args
     * @return StartFHIRExportJobResponse
     */
    public function startFHIRExportJob(StartFHIRExportJobRequest $args)
    {
        $result = parent::startFHIRExportJob($args->toArray());
        return new StartFHIRExportJobResponse($result->toArray());
    }
}
