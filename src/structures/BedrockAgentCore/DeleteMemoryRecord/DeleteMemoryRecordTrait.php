<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\DeleteMemoryRecord;

trait DeleteMemoryRecordTrait
{
    /**
     * @param DeleteMemoryRecordRequest $args
     * @return DeleteMemoryRecordResponse
     */
    public function deleteMemoryRecord(DeleteMemoryRecordRequest $args)
    {
        $result = parent::deleteMemoryRecord($args->toArray());
        return new DeleteMemoryRecordResponse($result->toArray());
    }
}
