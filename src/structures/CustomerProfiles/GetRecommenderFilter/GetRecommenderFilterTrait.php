<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetRecommenderFilter;

trait GetRecommenderFilterTrait
{
    /**
     * @param GetRecommenderFilterRequest $args
     * @return GetRecommenderFilterResponse
     */
    public function getRecommenderFilter(GetRecommenderFilterRequest $args)
    {
        $result = parent::getRecommenderFilter($args->toArray());
        return new GetRecommenderFilterResponse($result->toArray());
    }
}
