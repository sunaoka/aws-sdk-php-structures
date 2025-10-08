<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\StartDICOMImportJob;

trait StartDICOMImportJobTrait
{
    /**
     * @param StartDICOMImportJobRequest $args
     * @return StartDICOMImportJobResponse
     */
    public function startDICOMImportJob(StartDICOMImportJobRequest $args)
    {
        $result = parent::startDICOMImportJob($args->toArray());
        return new StartDICOMImportJobResponse($result->toArray());
    }
}
