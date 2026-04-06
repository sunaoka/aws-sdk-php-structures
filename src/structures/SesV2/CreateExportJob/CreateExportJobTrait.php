<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateExportJob;

trait CreateExportJobTrait
{
    /**
     * @param CreateExportJobRequest $args
     * @return CreateExportJobResponse
     */
    public function createExportJob(CreateExportJobRequest $args)
    {
        $result = parent::createExportJob($args->toArray());
        return new CreateExportJobResponse($result->toArray());
    }
}
