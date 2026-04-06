<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportRDSDatabaseRecommendations;

trait ExportRDSDatabaseRecommendationsTrait
{
    /**
     * @param ExportRDSDatabaseRecommendationsRequest $args
     * @return ExportRDSDatabaseRecommendationsResponse
     */
    public function exportRDSDatabaseRecommendations(ExportRDSDatabaseRecommendationsRequest $args)
    {
        $result = parent::exportRDSDatabaseRecommendations($args->toArray());
        return new ExportRDSDatabaseRecommendationsResponse($result->toArray());
    }
}
