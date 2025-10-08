<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEC2InstanceRecommendations;

trait GetEC2InstanceRecommendationsTrait
{
    /**
     * @param GetEC2InstanceRecommendationsRequest $args
     * @return GetEC2InstanceRecommendationsResponse
     */
    public function getEC2InstanceRecommendations(GetEC2InstanceRecommendationsRequest $args)
    {
        $result = parent::getEC2InstanceRecommendations($args->toArray());
        return new GetEC2InstanceRecommendationsResponse($result->toArray());
    }
}
