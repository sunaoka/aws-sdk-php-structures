<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomationRuntime\InvokeDataAutomationAsync;

trait InvokeDataAutomationAsyncTrait
{
    /**
     * @param InvokeDataAutomationAsyncRequest $args
     * @return InvokeDataAutomationAsyncResponse
     */
    public function invokeDataAutomationAsync(InvokeDataAutomationAsyncRequest $args)
    {
        $result = parent::invokeDataAutomationAsync($args->toArray());
        return new InvokeDataAutomationAsyncResponse($result->toArray());
    }
}
