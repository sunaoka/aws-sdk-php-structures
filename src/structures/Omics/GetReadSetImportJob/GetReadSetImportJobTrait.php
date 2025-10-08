<?php

namespace Sunaoka\Aws\Structures\Omics\GetReadSetImportJob;

trait GetReadSetImportJobTrait
{
    /**
     * @param GetReadSetImportJobRequest $args
     * @return GetReadSetImportJobResponse
     */
    public function getReadSetImportJob(GetReadSetImportJobRequest $args)
    {
        $result = parent::getReadSetImportJob($args->toArray());
        return new GetReadSetImportJobResponse($result->toArray());
    }
}
