<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\CancelPlanExecution;

trait CancelPlanExecutionTrait
{
    /**
     * @param CancelPlanExecutionRequest $args
     * @return CancelPlanExecutionResponse
     */
    public function cancelPlanExecution(CancelPlanExecutionRequest $args)
    {
        $result = parent::cancelPlanExecution($args->toArray());
        return new CancelPlanExecutionResponse($result->toArray());
    }
}
