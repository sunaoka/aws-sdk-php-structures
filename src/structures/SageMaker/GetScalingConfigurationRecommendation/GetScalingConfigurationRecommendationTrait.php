<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetScalingConfigurationRecommendation;

trait GetScalingConfigurationRecommendationTrait
{
    /**
     * @param GetScalingConfigurationRecommendationRequest $args
     * @return GetScalingConfigurationRecommendationResponse
     */
    public function getScalingConfigurationRecommendation(GetScalingConfigurationRecommendationRequest $args)
    {
        $result = parent::getScalingConfigurationRecommendation($args->toArray());
        return new GetScalingConfigurationRecommendationResponse($result->toArray());
    }
}
