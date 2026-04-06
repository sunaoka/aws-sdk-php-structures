<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeResourceGroupingRecommendationTask;

trait DescribeResourceGroupingRecommendationTaskTrait
{
    /**
     * @param DescribeResourceGroupingRecommendationTaskRequest $args
     * @return DescribeResourceGroupingRecommendationTaskResponse
     */
    public function describeResourceGroupingRecommendationTask(DescribeResourceGroupingRecommendationTaskRequest $args)
    {
        $result = parent::describeResourceGroupingRecommendationTask($args->toArray());
        return new DescribeResourceGroupingRecommendationTaskResponse($result->toArray());
    }
}
