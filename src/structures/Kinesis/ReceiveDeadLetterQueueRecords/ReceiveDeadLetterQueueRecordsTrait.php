<?php

namespace Sunaoka\Aws\Structures\Kinesis\ReceiveDeadLetterQueueRecords;

trait ReceiveDeadLetterQueueRecordsTrait
{
    /**
     * @param ReceiveDeadLetterQueueRecordsRequest $args
     * @return ReceiveDeadLetterQueueRecordsResponse
     */
    public function receiveDeadLetterQueueRecords(ReceiveDeadLetterQueueRecordsRequest $args)
    {
        $result = parent::receiveDeadLetterQueueRecords($args->toArray());
        return new ReceiveDeadLetterQueueRecordsResponse($result->toArray());
    }
}
