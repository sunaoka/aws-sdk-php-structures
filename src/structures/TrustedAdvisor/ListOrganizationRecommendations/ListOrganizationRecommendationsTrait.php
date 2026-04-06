<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListOrganizationRecommendations;

trait ListOrganizationRecommendationsTrait
{
    /**
     * @param ListOrganizationRecommendationsRequest $args
     * @return ListOrganizationRecommendationsResponse
     */
    public function listOrganizationRecommendations(ListOrganizationRecommendationsRequest $args)
    {
        $result = parent::listOrganizationRecommendations($args->toArray());
        return new ListOrganizationRecommendationsResponse($result->toArray());
    }
}
