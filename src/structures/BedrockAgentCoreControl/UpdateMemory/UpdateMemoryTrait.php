<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory;

trait UpdateMemoryTrait
{
    /**
     * @param UpdateMemoryRequest $args
     * @return UpdateMemoryResponse
     */
    public function updateMemory(UpdateMemoryRequest $args)
    {
        $result = parent::updateMemory($args->toArray());
        return new UpdateMemoryResponse($result->toArray());
    }
}
