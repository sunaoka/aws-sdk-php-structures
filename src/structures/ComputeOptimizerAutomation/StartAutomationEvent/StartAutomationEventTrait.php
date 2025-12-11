<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\StartAutomationEvent;

trait StartAutomationEventTrait
{
    /**
     * @param StartAutomationEventRequest $args
     * @return StartAutomationEventResponse
     */
    public function startAutomationEvent(StartAutomationEventRequest $args)
    {
        $result = parent::startAutomationEvent($args->toArray());
        return new StartAutomationEventResponse($result->toArray());
    }
}
