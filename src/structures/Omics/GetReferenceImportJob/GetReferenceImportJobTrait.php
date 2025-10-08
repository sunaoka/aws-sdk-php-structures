<?php

namespace Sunaoka\Aws\Structures\Omics\GetReferenceImportJob;

trait GetReferenceImportJobTrait
{
    /**
     * @param GetReferenceImportJobRequest $args
     * @return GetReferenceImportJobResponse
     */
    public function getReferenceImportJob(GetReferenceImportJobRequest $args)
    {
        $result = parent::getReferenceImportJob($args->toArray());
        return new GetReferenceImportJobResponse($result->toArray());
    }
}
