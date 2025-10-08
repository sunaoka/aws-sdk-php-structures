<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeAgentRuntime;

trait InvokeAgentRuntimeTrait
{
    /**
     * @param InvokeAgentRuntimeRequest $args
     * @return InvokeAgentRuntimeResponse
     */
    public function invokeAgentRuntime(InvokeAgentRuntimeRequest $args)
    {
        $result = parent::invokeAgentRuntime($args->toArray());
        return new InvokeAgentRuntimeResponse($result->toArray());
    }
}
