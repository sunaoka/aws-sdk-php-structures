<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListMemoryRecords;

trait ListMemoryRecordsTrait
{
    /**
     * @param ListMemoryRecordsRequest $args
     * @return ListMemoryRecordsResponse
     */
    public function listMemoryRecords(ListMemoryRecordsRequest $args)
    {
        $result = parent::listMemoryRecords($args->toArray());
        return new ListMemoryRecordsResponse($result->toArray());
    }
}
