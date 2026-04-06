<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListOrganizationRecommendationResources;

trait ListOrganizationRecommendationResourcesTrait
{
    /**
     * @param ListOrganizationRecommendationResourcesRequest $args
     * @return ListOrganizationRecommendationResourcesResponse
     */
    public function listOrganizationRecommendationResources(ListOrganizationRecommendationResourcesRequest $args)
    {
        $result = parent::listOrganizationRecommendationResources($args->toArray());
        return new ListOrganizationRecommendationResourcesResponse($result->toArray());
    }
}
