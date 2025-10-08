<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateDatasetImportJob;

trait CreateDatasetImportJobTrait
{
    /**
     * @param CreateDatasetImportJobRequest $args
     * @return CreateDatasetImportJobResponse
     */
    public function createDatasetImportJob(CreateDatasetImportJobRequest $args)
    {
        $result = parent::createDatasetImportJob($args->toArray());
        return new CreateDatasetImportJobResponse($result->toArray());
    }
}
