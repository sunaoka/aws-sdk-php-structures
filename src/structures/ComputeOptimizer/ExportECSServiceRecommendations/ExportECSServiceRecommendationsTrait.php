<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportECSServiceRecommendations;

trait ExportECSServiceRecommendationsTrait
{
    /**
     * @param ExportECSServiceRecommendationsRequest $args
     * @return ExportECSServiceRecommendationsResponse
     */
    public function exportECSServiceRecommendations(ExportECSServiceRecommendationsRequest $args)
    {
        $result = parent::exportECSServiceRecommendations($args->toArray());
        return new ExportECSServiceRecommendationsResponse($result->toArray());
    }
}
