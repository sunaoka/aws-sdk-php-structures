<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteAgentRuntime;

trait DeleteAgentRuntimeTrait
{
    /**
     * @param DeleteAgentRuntimeRequest $args
     * @return DeleteAgentRuntimeResponse
     */
    public function deleteAgentRuntime(DeleteAgentRuntimeRequest $args)
    {
        $result = parent::deleteAgentRuntime($args->toArray());
        return new DeleteAgentRuntimeResponse($result->toArray());
    }
}
