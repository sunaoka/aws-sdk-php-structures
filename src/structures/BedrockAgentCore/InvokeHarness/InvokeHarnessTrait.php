<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness;

trait InvokeHarnessTrait
{
    /**
     * @param InvokeHarnessRequest $args
     * @return InvokeHarnessResponse
     */
    public function invokeHarness(InvokeHarnessRequest $args)
    {
        $result = parent::invokeHarness($args->toArray());
        return new InvokeHarnessResponse($result->toArray());
    }
}
