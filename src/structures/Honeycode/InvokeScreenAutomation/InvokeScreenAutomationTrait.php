<?php

namespace Sunaoka\Aws\Structures\Honeycode\InvokeScreenAutomation;

trait InvokeScreenAutomationTrait
{
    /**
     * @param InvokeScreenAutomationRequest $args
     * @return InvokeScreenAutomationResponse
     */
    public function invokeScreenAutomation(InvokeScreenAutomationRequest $args)
    {
        $result = parent::invokeScreenAutomation($args->toArray());
        return new InvokeScreenAutomationResponse($result->toArray());
    }
}
