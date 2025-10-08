<?php

namespace Sunaoka\Aws\Structures\Omics\StartAnnotationImportJob;

trait StartAnnotationImportJobTrait
{
    /**
     * @param StartAnnotationImportJobRequest $args
     * @return StartAnnotationImportJobResponse
     */
    public function startAnnotationImportJob(StartAnnotationImportJobRequest $args)
    {
        $result = parent::startAnnotationImportJob($args->toArray());
        return new StartAnnotationImportJobResponse($result->toArray());
    }
}
