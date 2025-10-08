<?php

namespace Sunaoka\Aws\Structures\Omics\StartReferenceImportJob;

trait StartReferenceImportJobTrait
{
    /**
     * @param StartReferenceImportJobRequest $args
     * @return StartReferenceImportJobResponse
     */
    public function startReferenceImportJob(StartReferenceImportJobRequest $args)
    {
        $result = parent::startReferenceImportJob($args->toArray());
        return new StartReferenceImportJobResponse($result->toArray());
    }
}
