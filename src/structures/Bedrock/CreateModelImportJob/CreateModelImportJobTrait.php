<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateModelImportJob;

trait CreateModelImportJobTrait
{
    /**
     * @param CreateModelImportJobRequest $args
     * @return CreateModelImportJobResponse
     */
    public function createModelImportJob(CreateModelImportJobRequest $args)
    {
        $result = parent::createModelImportJob($args->toArray());
        return new CreateModelImportJobResponse($result->toArray());
    }
}
