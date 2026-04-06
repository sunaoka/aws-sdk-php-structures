<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListAutomationEventSteps;

trait ListAutomationEventStepsTrait
{
    /**
     * @param ListAutomationEventStepsRequest $args
     * @return ListAutomationEventStepsResponse
     */
    public function listAutomationEventSteps(ListAutomationEventStepsRequest $args)
    {
        $result = parent::listAutomationEventSteps($args->toArray());
        return new ListAutomationEventStepsResponse($result->toArray());
    }
}
