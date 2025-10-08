<?php

namespace Sunaoka\Aws\Structures\Kinesis\PutRecords;

trait PutRecordsTrait
{
    /**
     * @param PutRecordsRequest $args
     * @return PutRecordsResponse
     */
    public function putRecords(PutRecordsRequest $args)
    {
        $result = parent::putRecords($args->toArray());
        return new PutRecordsResponse($result->toArray());
    }
}
