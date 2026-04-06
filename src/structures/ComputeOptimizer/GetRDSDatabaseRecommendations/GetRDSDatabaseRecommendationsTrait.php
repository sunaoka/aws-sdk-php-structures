<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendations;

trait GetRDSDatabaseRecommendationsTrait
{
    /**
     * @param GetRDSDatabaseRecommendationsRequest $args
     * @return GetRDSDatabaseRecommendationsResponse
     */
    public function getRDSDatabaseRecommendations(GetRDSDatabaseRecommendationsRequest $args)
    {
        $result = parent::getRDSDatabaseRecommendations($args->toArray());
        return new GetRDSDatabaseRecommendationsResponse($result->toArray());
    }
}
