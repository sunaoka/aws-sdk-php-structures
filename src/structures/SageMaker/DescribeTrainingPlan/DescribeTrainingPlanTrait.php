<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingPlan;

trait DescribeTrainingPlanTrait
{
    /**
     * @param DescribeTrainingPlanRequest $args
     * @return DescribeTrainingPlanResponse
     */
    public function describeTrainingPlan(DescribeTrainingPlanRequest $args)
    {
        $result = parent::describeTrainingPlan($args->toArray());
        return new DescribeTrainingPlanResponse($result->toArray());
    }
}
