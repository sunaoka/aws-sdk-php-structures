<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportLicenseRecommendations;

trait ExportLicenseRecommendationsTrait
{
    /**
     * @param ExportLicenseRecommendationsRequest $args
     * @return ExportLicenseRecommendationsResponse
     */
    public function exportLicenseRecommendations(ExportLicenseRecommendationsRequest $args)
    {
        $result = parent::exportLicenseRecommendations($args->toArray());
        return new ExportLicenseRecommendationsResponse($result->toArray());
    }
}
