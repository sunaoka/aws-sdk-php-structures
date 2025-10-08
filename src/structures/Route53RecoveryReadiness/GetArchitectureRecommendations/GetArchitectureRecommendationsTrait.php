<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetArchitectureRecommendations;

trait GetArchitectureRecommendationsTrait
{
    /**
     * @param GetArchitectureRecommendationsRequest $args
     * @return GetArchitectureRecommendationsResponse
     */
    public function getArchitectureRecommendations(GetArchitectureRecommendationsRequest $args)
    {
        $result = parent::getArchitectureRecommendations($args->toArray());
        return new GetArchitectureRecommendationsResponse($result->toArray());
    }
}
