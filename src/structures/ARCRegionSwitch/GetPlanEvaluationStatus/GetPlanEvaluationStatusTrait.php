<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanEvaluationStatus;

trait GetPlanEvaluationStatusTrait
{
    /**
     * @param GetPlanEvaluationStatusRequest $args
     * @return GetPlanEvaluationStatusResponse
     */
    public function getPlanEvaluationStatus(GetPlanEvaluationStatusRequest $args)
    {
        $result = parent::getPlanEvaluationStatus($args->toArray());
        return new GetPlanEvaluationStatusResponse($result->toArray());
    }
}
