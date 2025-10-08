<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\GetDICOMImportJob;

trait GetDICOMImportJobTrait
{
    /**
     * @param GetDICOMImportJobRequest $args
     * @return GetDICOMImportJobResponse
     */
    public function getDICOMImportJob(GetDICOMImportJobRequest $args)
    {
        $result = parent::getDICOMImportJob($args->toArray());
        return new GetDICOMImportJobResponse($result->toArray());
    }
}
