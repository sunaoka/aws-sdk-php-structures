<?php

namespace Sunaoka\Aws\Structures\SageMaker\ExtendTrainingPlan;

trait ExtendTrainingPlanTrait
{
    /**
     * @param ExtendTrainingPlanRequest $args
     * @return ExtendTrainingPlanResponse
     */
    public function extendTrainingPlan(ExtendTrainingPlanRequest $args)
    {
        $result = parent::extendTrainingPlan($args->toArray());
        return new ExtendTrainingPlanResponse($result->toArray());
    }
}
