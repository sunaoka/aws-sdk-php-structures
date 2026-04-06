<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\ApprovePlanExecutionStep;

trait ApprovePlanExecutionStepTrait
{
    /**
     * @param ApprovePlanExecutionStepRequest $args
     * @return ApprovePlanExecutionStepResponse
     */
    public function approvePlanExecutionStep(ApprovePlanExecutionStepRequest $args)
    {
        $result = parent::approvePlanExecutionStep($args->toArray());
        return new ApprovePlanExecutionStepResponse($result->toArray());
    }
}
