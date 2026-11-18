<?php

namespace Sunaoka\Aws\Structures\Kinesis\AcknowledgeQueueRecords;

trait AcknowledgeQueueRecordsTrait
{
    /**
     * @param AcknowledgeQueueRecordsRequest $args
     * @return AcknowledgeQueueRecordsResponse
     */
    public function acknowledgeQueueRecords(AcknowledgeQueueRecordsRequest $args)
    {
        $result = parent::acknowledgeQueueRecords($args->toArray());
        return new AcknowledgeQueueRecordsResponse($result->toArray());
    }
}
