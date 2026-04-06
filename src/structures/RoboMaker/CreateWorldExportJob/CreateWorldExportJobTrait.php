<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateWorldExportJob;

trait CreateWorldExportJobTrait
{
    /**
     * @param CreateWorldExportJobRequest $args
     * @return CreateWorldExportJobResponse
     */
    public function createWorldExportJob(CreateWorldExportJobRequest $args)
    {
        $result = parent::createWorldExportJob($args->toArray());
        return new CreateWorldExportJobResponse($result->toArray());
    }
}
