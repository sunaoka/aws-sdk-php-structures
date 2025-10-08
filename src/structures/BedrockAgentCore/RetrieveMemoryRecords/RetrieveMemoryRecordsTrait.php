<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\RetrieveMemoryRecords;

trait RetrieveMemoryRecordsTrait
{
    /**
     * @param RetrieveMemoryRecordsRequest $args
     * @return RetrieveMemoryRecordsResponse
     */
    public function retrieveMemoryRecords(RetrieveMemoryRecordsRequest $args)
    {
        $result = parent::retrieveMemoryRecords($args->toArray());
        return new RetrieveMemoryRecordsResponse($result->toArray());
    }
}
