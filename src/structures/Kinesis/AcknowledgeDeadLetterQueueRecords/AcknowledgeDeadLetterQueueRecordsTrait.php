<?php

namespace Sunaoka\Aws\Structures\Kinesis\AcknowledgeDeadLetterQueueRecords;

trait AcknowledgeDeadLetterQueueRecordsTrait
{
    /**
     * @param AcknowledgeDeadLetterQueueRecordsRequest $args
     * @return AcknowledgeDeadLetterQueueRecordsResponse
     */
    public function acknowledgeDeadLetterQueueRecords(AcknowledgeDeadLetterQueueRecordsRequest $args)
    {
        $result = parent::acknowledgeDeadLetterQueueRecords($args->toArray());
        return new AcknowledgeDeadLetterQueueRecordsResponse($result->toArray());
    }
}
