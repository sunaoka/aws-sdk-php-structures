<?php

namespace Sunaoka\Aws\Structures\Kinesis\RestoreDeadLetterQueueRecords;

trait RestoreDeadLetterQueueRecordsTrait
{
    /**
     * @param RestoreDeadLetterQueueRecordsRequest $args
     * @return RestoreDeadLetterQueueRecordsResponse
     */
    public function restoreDeadLetterQueueRecords(RestoreDeadLetterQueueRecordsRequest $args)
    {
        $result = parent::restoreDeadLetterQueueRecords($args->toArray());
        return new RestoreDeadLetterQueueRecordsResponse($result->toArray());
    }
}
