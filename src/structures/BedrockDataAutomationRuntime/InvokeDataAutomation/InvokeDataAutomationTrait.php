<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomationRuntime\InvokeDataAutomation;

trait InvokeDataAutomationTrait
{
    /**
     * @param InvokeDataAutomationRequest $args
     * @return InvokeDataAutomationResponse
     */
    public function invokeDataAutomation(InvokeDataAutomationRequest $args)
    {
        $result = parent::invokeDataAutomation($args->toArray());
        return new InvokeDataAutomationResponse($result->toArray());
    }
}
