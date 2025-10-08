<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportAutoScalingGroupRecommendations;

trait ExportAutoScalingGroupRecommendationsTrait
{
    /**
     * @param ExportAutoScalingGroupRecommendationsRequest $args
     * @return ExportAutoScalingGroupRecommendationsResponse
     */
    public function exportAutoScalingGroupRecommendations(ExportAutoScalingGroupRecommendationsRequest $args)
    {
        $result = parent::exportAutoScalingGroupRecommendations($args->toArray());
        return new ExportAutoScalingGroupRecommendationsResponse($result->toArray());
    }
}
