<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLicenseRecommendations;

trait GetLicenseRecommendationsTrait
{
    /**
     * @param GetLicenseRecommendationsRequest $args
     * @return GetLicenseRecommendationsResponse
     */
    public function getLicenseRecommendations(GetLicenseRecommendationsRequest $args)
    {
        $result = parent::getLicenseRecommendations($args->toArray());
        return new GetLicenseRecommendationsResponse($result->toArray());
    }
}
