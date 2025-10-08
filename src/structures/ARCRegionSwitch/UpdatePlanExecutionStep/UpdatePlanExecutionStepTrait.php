<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\UpdatePlanExecutionStep;

trait UpdatePlanExecutionStepTrait
{
    /**
     * @param UpdatePlanExecutionStepRequest $args
     * @return UpdatePlanExecutionStepResponse
     */
    public function updatePlanExecutionStep(UpdatePlanExecutionStepRequest $args)
    {
        $result = parent::updatePlanExecutionStep($args->toArray());
        return new UpdatePlanExecutionStepResponse($result->toArray());
    }
}
