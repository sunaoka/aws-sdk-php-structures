<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteMemory;

trait DeleteMemoryTrait
{
    /**
     * @param DeleteMemoryRequest $args
     * @return DeleteMemoryResponse
     */
    public function deleteMemory(DeleteMemoryRequest $args)
    {
        $result = parent::deleteMemory($args->toArray());
        return new DeleteMemoryResponse($result->toArray());
    }
}
