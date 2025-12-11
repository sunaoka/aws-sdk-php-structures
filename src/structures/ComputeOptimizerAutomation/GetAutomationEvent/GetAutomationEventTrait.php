<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\GetAutomationEvent;

trait GetAutomationEventTrait
{
    /**
     * @param GetAutomationEventRequest $args
     * @return GetAutomationEventResponse
     */
    public function getAutomationEvent(GetAutomationEventRequest $args)
    {
        $result = parent::getAutomationEvent($args->toArray());
        return new GetAutomationEventResponse($result->toArray());
    }
}
