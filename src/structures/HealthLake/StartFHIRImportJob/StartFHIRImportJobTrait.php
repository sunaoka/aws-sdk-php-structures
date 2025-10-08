<?php

namespace Sunaoka\Aws\Structures\HealthLake\StartFHIRImportJob;

trait StartFHIRImportJobTrait
{
    /**
     * @param StartFHIRImportJobRequest $args
     * @return StartFHIRImportJobResponse
     */
    public function startFHIRImportJob(StartFHIRImportJobRequest $args)
    {
        $result = parent::startFHIRImportJob($args->toArray());
        return new StartFHIRImportJobResponse($result->toArray());
    }
}
