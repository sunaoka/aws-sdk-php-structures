<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateDatasetExportJob;

trait CreateDatasetExportJobTrait
{
    /**
     * @param CreateDatasetExportJobRequest $args
     * @return CreateDatasetExportJobResponse
     */
    public function createDatasetExportJob(CreateDatasetExportJobRequest $args)
    {
        $result = parent::createDatasetExportJob($args->toArray());
        return new CreateDatasetExportJobResponse($result->toArray());
    }
}
