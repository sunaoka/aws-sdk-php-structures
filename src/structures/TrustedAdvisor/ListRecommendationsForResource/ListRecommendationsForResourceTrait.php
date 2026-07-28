<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListRecommendationsForResource;

trait ListRecommendationsForResourceTrait
{
    /**
     * @param ListRecommendationsForResourceRequest $args
     * @return ListRecommendationsForResourceResponse
     */
    public function listRecommendationsForResource(ListRecommendationsForResourceRequest $args)
    {
        $result = parent::listRecommendationsForResource($args->toArray());
        return new ListRecommendationsForResourceResponse($result->toArray());
    }
}
