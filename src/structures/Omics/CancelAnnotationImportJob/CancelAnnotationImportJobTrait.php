<?php

namespace Sunaoka\Aws\Structures\Omics\CancelAnnotationImportJob;

trait CancelAnnotationImportJobTrait
{
    /**
     * @param CancelAnnotationImportJobRequest $args
     * @return CancelAnnotationImportJobResponse
     */
    public function cancelAnnotationImportJob(CancelAnnotationImportJobRequest $args)
    {
        $result = parent::cancelAnnotationImportJob($args->toArray());
        return new CancelAnnotationImportJobResponse($result->toArray());
    }
}
