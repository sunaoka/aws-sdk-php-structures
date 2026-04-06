<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrainingPlans;

trait ListTrainingPlansTrait
{
    /**
     * @param ListTrainingPlansRequest $args
     * @return ListTrainingPlansResponse
     */
    public function listTrainingPlans(ListTrainingPlansRequest $args)
    {
        $result = parent::listTrainingPlans($args->toArray());
        return new ListTrainingPlansResponse($result->toArray());
    }
}
