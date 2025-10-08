<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation;

trait GetRightsizingRecommendationTrait
{
    /**
     * @param GetRightsizingRecommendationRequest $args
     * @return GetRightsizingRecommendationResponse
     */
    public function getRightsizingRecommendation(GetRightsizingRecommendationRequest $args)
    {
        $result = parent::getRightsizingRecommendation($args->toArray());
        return new GetRightsizingRecommendationResponse($result->toArray());
    }
}
