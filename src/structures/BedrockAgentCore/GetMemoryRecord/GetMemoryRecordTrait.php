<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetMemoryRecord;

trait GetMemoryRecordTrait
{
    /**
     * @param GetMemoryRecordRequest $args
     * @return GetMemoryRecordResponse
     */
    public function getMemoryRecord(GetMemoryRecordRequest $args)
    {
        $result = parent::getMemoryRecord($args->toArray());
        return new GetMemoryRecordResponse($result->toArray());
    }
}
