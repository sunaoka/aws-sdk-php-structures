<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetAgentMemory;

trait GetAgentMemoryTrait
{
    /**
     * @param GetAgentMemoryRequest $args
     * @return GetAgentMemoryResponse
     */
    public function getAgentMemory(GetAgentMemoryRequest $args)
    {
        $result = parent::getAgentMemory($args->toArray());
        return new GetAgentMemoryResponse($result->toArray());
    }
}
