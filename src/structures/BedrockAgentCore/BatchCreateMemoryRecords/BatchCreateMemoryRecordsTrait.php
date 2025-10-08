<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\BatchCreateMemoryRecords;

trait BatchCreateMemoryRecordsTrait
{
    /**
     * @param BatchCreateMemoryRecordsRequest $args
     * @return BatchCreateMemoryRecordsResponse
     */
    public function batchCreateMemoryRecords(BatchCreateMemoryRecordsRequest $args)
    {
        $result = parent::batchCreateMemoryRecords($args->toArray());
        return new BatchCreateMemoryRecordsResponse($result->toArray());
    }
}
