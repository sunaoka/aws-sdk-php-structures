<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\ListPlanExecutionEvents;

trait ListPlanExecutionEventsTrait
{
    /**
     * @param ListPlanExecutionEventsRequest $args
     * @return ListPlanExecutionEventsResponse
     */
    public function listPlanExecutionEvents(ListPlanExecutionEventsRequest $args)
    {
        $result = parent::listPlanExecutionEvents($args->toArray());
        return new ListPlanExecutionEventsResponse($result->toArray());
    }
}
