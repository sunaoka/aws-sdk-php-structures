<?php

namespace Sunaoka\Aws\Structures\SageMakerFeatureStoreRuntime\BatchGetRecord;

trait BatchGetRecordTrait
{
    /**
     * @param BatchGetRecordRequest $args
     * @return BatchGetRecordResponse
     */
    public function batchGetRecord(BatchGetRecordRequest $args)
    {
        $result = parent::batchGetRecord($args->toArray());
        return new BatchGetRecordResponse($result->toArray());
    }
}
