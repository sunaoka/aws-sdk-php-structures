<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListRecommendationResources;

trait ListRecommendationResourcesTrait
{
    /**
     * @param ListRecommendationResourcesRequest $args
     * @return ListRecommendationResourcesResponse
     */
    public function listRecommendationResources(ListRecommendationResourcesRequest $args)
    {
        $result = parent::listRecommendationResources($args->toArray());
        return new ListRecommendationResourcesResponse($result->toArray());
    }
}
