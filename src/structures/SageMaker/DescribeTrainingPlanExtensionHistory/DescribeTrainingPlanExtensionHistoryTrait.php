<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingPlanExtensionHistory;

trait DescribeTrainingPlanExtensionHistoryTrait
{
    /**
     * @param DescribeTrainingPlanExtensionHistoryRequest $args
     * @return DescribeTrainingPlanExtensionHistoryResponse
     */
    public function describeTrainingPlanExtensionHistory(DescribeTrainingPlanExtensionHistoryRequest $args)
    {
        $result = parent::describeTrainingPlanExtensionHistory($args->toArray());
        return new DescribeTrainingPlanExtensionHistoryResponse($result->toArray());
    }
}
