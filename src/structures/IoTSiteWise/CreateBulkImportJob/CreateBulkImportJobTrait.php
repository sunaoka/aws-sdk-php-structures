<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateBulkImportJob;

trait CreateBulkImportJobTrait
{
    /**
     * @param CreateBulkImportJobRequest $args
     * @return CreateBulkImportJobResponse
     */
    public function createBulkImportJob(CreateBulkImportJobRequest $args)
    {
        $result = parent::createBulkImportJob($args->toArray());
        return new CreateBulkImportJobResponse($result->toArray());
    }
}
