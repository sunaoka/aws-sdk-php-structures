<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\ListPlanExecutions;

trait ListPlanExecutionsTrait
{
    /**
     * @param ListPlanExecutionsRequest $args
     * @return ListPlanExecutionsResponse
     */
    public function listPlanExecutions(ListPlanExecutionsRequest $args)
    {
        $result = parent::listPlanExecutions($args->toArray());
        return new ListPlanExecutionsResponse($result->toArray());
    }
}
