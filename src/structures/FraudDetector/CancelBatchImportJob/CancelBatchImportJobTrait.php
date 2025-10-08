<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CancelBatchImportJob;

trait CancelBatchImportJobTrait
{
    /**
     * @param CancelBatchImportJobRequest $args
     * @return CancelBatchImportJobResponse
     */
    public function cancelBatchImportJob(CancelBatchImportJobRequest $args)
    {
        $result = parent::cancelBatchImportJob($args->toArray());
        return new CancelBatchImportJobResponse($result->toArray());
    }
}
