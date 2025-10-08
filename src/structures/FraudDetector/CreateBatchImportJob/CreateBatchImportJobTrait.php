<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CreateBatchImportJob;

trait CreateBatchImportJobTrait
{
    /**
     * @param CreateBatchImportJobRequest $args
     * @return CreateBatchImportJobResponse
     */
    public function createBatchImportJob(CreateBatchImportJobRequest $args)
    {
        $result = parent::createBatchImportJob($args->toArray());
        return new CreateBatchImportJobResponse($result->toArray());
    }
}
