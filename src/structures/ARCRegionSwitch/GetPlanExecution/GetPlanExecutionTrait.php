<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanExecution;

trait GetPlanExecutionTrait
{
    /**
     * @param GetPlanExecutionRequest $args
     * @return GetPlanExecutionResponse
     */
    public function getPlanExecution(GetPlanExecutionRequest $args)
    {
        $result = parent::getPlanExecution($args->toArray());
        return new GetPlanExecutionResponse($result->toArray());
    }
}
