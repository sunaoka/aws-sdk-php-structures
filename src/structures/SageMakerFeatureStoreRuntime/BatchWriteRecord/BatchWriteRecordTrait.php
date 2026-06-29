<?php

namespace Sunaoka\Aws\Structures\SageMakerFeatureStoreRuntime\BatchWriteRecord;

trait BatchWriteRecordTrait
{
    /**
     * @param BatchWriteRecordRequest $args
     * @return BatchWriteRecordResponse
     */
    public function batchWriteRecord(BatchWriteRecordRequest $args)
    {
        $result = parent::batchWriteRecord($args->toArray());
        return new BatchWriteRecordResponse($result->toArray());
    }
}
