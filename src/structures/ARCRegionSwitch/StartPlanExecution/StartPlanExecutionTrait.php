<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\StartPlanExecution;

trait StartPlanExecutionTrait
{
    /**
     * @param StartPlanExecutionRequest $args
     * @return StartPlanExecutionResponse
     */
    public function startPlanExecution(StartPlanExecutionRequest $args)
    {
        $result = parent::startPlanExecution($args->toArray());
        return new StartPlanExecutionResponse($result->toArray());
    }
}
