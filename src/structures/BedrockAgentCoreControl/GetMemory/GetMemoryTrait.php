<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetMemory;

trait GetMemoryTrait
{
    /**
     * @param GetMemoryRequest $args
     * @return GetMemoryResponse
     */
    public function getMemory(GetMemoryRequest $args)
    {
        $result = parent::getMemory($args->toArray());
        return new GetMemoryResponse($result->toArray());
    }
}
