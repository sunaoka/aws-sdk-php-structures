<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\UpdatePlanExecution;

trait UpdatePlanExecutionTrait
{
    /**
     * @param UpdatePlanExecutionRequest $args
     * @return UpdatePlanExecutionResponse
     */
    public function updatePlanExecution(UpdatePlanExecutionRequest $args)
    {
        $result = parent::updatePlanExecution($args->toArray());
        return new UpdatePlanExecutionResponse($result->toArray());
    }
}
