<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\BatchUpdateMemoryRecords;

trait BatchUpdateMemoryRecordsTrait
{
    /**
     * @param BatchUpdateMemoryRecordsRequest $args
     * @return BatchUpdateMemoryRecordsResponse
     */
    public function batchUpdateMemoryRecords(BatchUpdateMemoryRecordsRequest $args)
    {
        $result = parent::batchUpdateMemoryRecords($args->toArray());
        return new BatchUpdateMemoryRecordsResponse($result->toArray());
    }
}
