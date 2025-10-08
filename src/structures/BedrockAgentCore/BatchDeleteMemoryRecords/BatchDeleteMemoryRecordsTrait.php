<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\BatchDeleteMemoryRecords;

trait BatchDeleteMemoryRecordsTrait
{
    /**
     * @param BatchDeleteMemoryRecordsRequest $args
     * @return BatchDeleteMemoryRecordsResponse
     */
    public function batchDeleteMemoryRecords(BatchDeleteMemoryRecordsRequest $args)
    {
        $result = parent::batchDeleteMemoryRecords($args->toArray());
        return new BatchDeleteMemoryRecordsResponse($result->toArray());
    }
}
