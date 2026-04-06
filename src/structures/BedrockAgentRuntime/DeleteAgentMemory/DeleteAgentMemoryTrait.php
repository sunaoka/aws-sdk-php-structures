<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\DeleteAgentMemory;

trait DeleteAgentMemoryTrait
{
    /**
     * @param DeleteAgentMemoryRequest $args
     * @return DeleteAgentMemoryResponse
     */
    public function deleteAgentMemory(DeleteAgentMemoryRequest $args)
    {
        $result = parent::deleteAgentMemory($args->toArray());
        return new DeleteAgentMemoryResponse($result->toArray());
    }
}
