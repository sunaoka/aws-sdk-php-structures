<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListAutomationEventSummaries;

trait ListAutomationEventSummariesTrait
{
    /**
     * @param ListAutomationEventSummariesRequest $args
     * @return ListAutomationEventSummariesResponse
     */
    public function listAutomationEventSummaries(ListAutomationEventSummariesRequest $args)
    {
        $result = parent::listAutomationEventSummaries($args->toArray());
        return new ListAutomationEventSummariesResponse($result->toArray());
    }
}
