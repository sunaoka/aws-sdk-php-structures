<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetModelImportJob;

trait GetModelImportJobTrait
{
    /**
     * @param GetModelImportJobRequest $args
     * @return GetModelImportJobResponse
     */
    public function getModelImportJob(GetModelImportJobRequest $args)
    {
        $result = parent::getModelImportJob($args->toArray());
        return new GetModelImportJobResponse($result->toArray());
    }
}
