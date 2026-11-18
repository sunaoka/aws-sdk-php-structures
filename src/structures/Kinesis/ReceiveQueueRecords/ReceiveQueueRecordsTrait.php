<?php

namespace Sunaoka\Aws\Structures\Kinesis\ReceiveQueueRecords;

trait ReceiveQueueRecordsTrait
{
    /**
     * @param ReceiveQueueRecordsRequest $args
     * @return ReceiveQueueRecordsResponse
     */
    public function receiveQueueRecords(ReceiveQueueRecordsRequest $args)
    {
        $result = parent::receiveQueueRecords($args->toArray());
        return new ReceiveQueueRecordsResponse($result->toArray());
    }
}
