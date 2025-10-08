<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent;

trait InvokeAgentTrait
{
    /**
     * @param InvokeAgentRequest $args
     * @return InvokeAgentResponse
     */
    public function invokeAgent(InvokeAgentRequest $args)
    {
        $result = parent::invokeAgent($args->toArray());
        return new InvokeAgentResponse($result->toArray());
    }
}
