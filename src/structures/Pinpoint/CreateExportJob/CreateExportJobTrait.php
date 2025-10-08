<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateExportJob;

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
