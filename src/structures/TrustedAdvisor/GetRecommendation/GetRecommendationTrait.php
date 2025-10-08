<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\GetRecommendation;

trait GetRecommendationTrait
{
    /**
     * @param GetRecommendationRequest $args
     * @return GetRecommendationResponse
     */
    public function getRecommendation(GetRecommendationRequest $args)
    {
        $result = parent::getRecommendation($args->toArray());
        return new GetRecommendationResponse($result->toArray());
    }
}
