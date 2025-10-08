<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelCardExportJob;

trait CreateModelCardExportJobTrait
{
    /**
     * @param CreateModelCardExportJobRequest $args
     * @return CreateModelCardExportJobResponse
     */
    public function createModelCardExportJob(CreateModelCardExportJobRequest $args)
    {
        $result = parent::createModelCardExportJob($args->toArray());
        return new CreateModelCardExportJobResponse($result->toArray());
    }
}
