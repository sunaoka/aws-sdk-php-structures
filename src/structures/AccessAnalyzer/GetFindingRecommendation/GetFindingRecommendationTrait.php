<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingRecommendation;

trait GetFindingRecommendationTrait
{
    /**
     * @param GetFindingRecommendationRequest $args
     * @return GetFindingRecommendationResponse
     */
    public function getFindingRecommendation(GetFindingRecommendationRequest $args)
    {
        $result = parent::getFindingRecommendation($args->toArray());
        return new GetFindingRecommendationResponse($result->toArray());
    }
}
