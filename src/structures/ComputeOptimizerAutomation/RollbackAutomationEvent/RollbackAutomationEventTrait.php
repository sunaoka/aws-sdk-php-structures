<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\RollbackAutomationEvent;

trait RollbackAutomationEventTrait
{
    /**
     * @param RollbackAutomationEventRequest $args
     * @return RollbackAutomationEventResponse
     */
    public function rollbackAutomationEvent(RollbackAutomationEventRequest $args)
    {
        $result = parent::rollbackAutomationEvent($args->toArray());
        return new RollbackAutomationEventResponse($result->toArray());
    }
}
