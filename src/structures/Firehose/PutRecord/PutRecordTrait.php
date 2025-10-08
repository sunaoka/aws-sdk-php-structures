<?php

namespace Sunaoka\Aws\Structures\Firehose\PutRecord;

trait PutRecordTrait
{
    /**
     * @param PutRecordRequest $args
     * @return PutRecordResponse
     */
    public function putRecord(PutRecordRequest $args)
    {
        $result = parent::putRecord($args->toArray());
        return new PutRecordResponse($result->toArray());
    }
}
