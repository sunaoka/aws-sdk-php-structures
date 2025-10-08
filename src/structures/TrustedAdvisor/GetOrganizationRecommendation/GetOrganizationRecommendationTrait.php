<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\GetOrganizationRecommendation;

trait GetOrganizationRecommendationTrait
{
    /**
     * @param GetOrganizationRecommendationRequest $args
     * @return GetOrganizationRecommendationResponse
     */
    public function getOrganizationRecommendation(GetOrganizationRecommendationRequest $args)
    {
        $result = parent::getOrganizationRecommendation($args->toArray());
        return new GetOrganizationRecommendationResponse($result->toArray());
    }
}
