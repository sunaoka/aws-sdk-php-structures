<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportEBSVolumeRecommendations;

trait ExportEBSVolumeRecommendationsTrait
{
    /**
     * @param ExportEBSVolumeRecommendationsRequest $args
     * @return ExportEBSVolumeRecommendationsResponse
     */
    public function exportEBSVolumeRecommendations(ExportEBSVolumeRecommendationsRequest $args)
    {
        $result = parent::exportEBSVolumeRecommendations($args->toArray());
        return new ExportEBSVolumeRecommendationsResponse($result->toArray());
    }
}
