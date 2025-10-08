<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent;

trait InvokeInlineAgentTrait
{
    /**
     * @param InvokeInlineAgentRequest $args
     * @return InvokeInlineAgentResponse
     */
    public function invokeInlineAgent(InvokeInlineAgentRequest $args)
    {
        $result = parent::invokeInlineAgent($args->toArray());
        return new InvokeInlineAgentResponse($result->toArray());
    }
}
