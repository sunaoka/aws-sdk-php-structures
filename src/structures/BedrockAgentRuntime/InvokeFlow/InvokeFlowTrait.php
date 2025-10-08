<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow;

trait InvokeFlowTrait
{
    /**
     * @param InvokeFlowRequest $args
     * @return InvokeFlowResponse
     */
    public function invokeFlow(InvokeFlowRequest $args)
    {
        $result = parent::invokeFlow($args->toArray());
        return new InvokeFlowResponse($result->toArray());
    }
}
