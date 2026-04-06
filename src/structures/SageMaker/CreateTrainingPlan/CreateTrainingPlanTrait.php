<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrainingPlan;

trait CreateTrainingPlanTrait
{
    /**
     * @param CreateTrainingPlanRequest $args
     * @return CreateTrainingPlanResponse
     */
    public function createTrainingPlan(CreateTrainingPlanRequest $args)
    {
        $result = parent::createTrainingPlan($args->toArray());
        return new CreateTrainingPlanResponse($result->toArray());
    }
}
