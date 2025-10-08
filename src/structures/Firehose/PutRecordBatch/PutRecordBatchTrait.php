<?php

namespace Sunaoka\Aws\Structures\Firehose\PutRecordBatch;

trait PutRecordBatchTrait
{
    /**
     * @param PutRecordBatchRequest $args
     * @return PutRecordBatchResponse
     */
    public function putRecordBatch(PutRecordBatchRequest $args)
    {
        $result = parent::putRecordBatch($args->toArray());
        return new PutRecordBatchResponse($result->toArray());
    }
}
