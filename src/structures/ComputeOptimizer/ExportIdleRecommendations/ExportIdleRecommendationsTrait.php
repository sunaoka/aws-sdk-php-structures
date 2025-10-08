<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportIdleRecommendations;

trait ExportIdleRecommendationsTrait
{
    /**
     * @param ExportIdleRecommendationsRequest $args
     * @return ExportIdleRecommendationsResponse
     */
    public function exportIdleRecommendations(ExportIdleRecommendationsRequest $args)
    {
        $result = parent::exportIdleRecommendations($args->toArray());
        return new ExportIdleRecommendationsResponse($result->toArray());
    }
}
