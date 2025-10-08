<?php

namespace Sunaoka\Aws\Structures\Omics\GetAnnotationImportJob;

trait GetAnnotationImportJobTrait
{
    /**
     * @param GetAnnotationImportJobRequest $args
     * @return GetAnnotationImportJobResponse
     */
    public function getAnnotationImportJob(GetAnnotationImportJobRequest $args)
    {
        $result = parent::getAnnotationImportJob($args->toArray());
        return new GetAnnotationImportJobResponse($result->toArray());
    }
}
