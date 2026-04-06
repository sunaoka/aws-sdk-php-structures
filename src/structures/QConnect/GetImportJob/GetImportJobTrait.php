<?php

namespace Sunaoka\Aws\Structures\QConnect\GetImportJob;

trait GetImportJobTrait
{
    /**
     * @param GetImportJobRequest $args
     * @return GetImportJobResponse
     */
    public function getImportJob(GetImportJobRequest $args)
    {
        $result = parent::getImportJob($args->toArray());
        return new GetImportJobResponse($result->toArray());
    }
}
