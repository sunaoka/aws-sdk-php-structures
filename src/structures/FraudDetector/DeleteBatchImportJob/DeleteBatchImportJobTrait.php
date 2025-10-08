<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteBatchImportJob;

trait DeleteBatchImportJobTrait
{
    /**
     * @param DeleteBatchImportJobRequest $args
     * @return DeleteBatchImportJobResponse
     */
    public function deleteBatchImportJob(DeleteBatchImportJobRequest $args)
    {
        $result = parent::deleteBatchImportJob($args->toArray());
        return new DeleteBatchImportJobResponse($result->toArray());
    }
}
