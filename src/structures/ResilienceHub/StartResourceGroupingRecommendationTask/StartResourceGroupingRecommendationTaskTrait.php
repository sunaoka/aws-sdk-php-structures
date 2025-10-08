<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\StartResourceGroupingRecommendationTask;

trait StartResourceGroupingRecommendationTaskTrait
{
    /**
     * @param StartResourceGroupingRecommendationTaskRequest $args
     * @return StartResourceGroupingRecommendationTaskResponse
     */
    public function startResourceGroupingRecommendationTask(StartResourceGroupingRecommendationTaskRequest $args)
    {
        $result = parent::startResourceGroupingRecommendationTask($args->toArray());
        return new StartResourceGroupingRecommendationTaskResponse($result->toArray());
    }
}
