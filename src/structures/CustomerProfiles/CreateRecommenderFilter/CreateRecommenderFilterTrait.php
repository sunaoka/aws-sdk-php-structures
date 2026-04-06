<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateRecommenderFilter;

trait CreateRecommenderFilterTrait
{
    /**
     * @param CreateRecommenderFilterRequest $args
     * @return CreateRecommenderFilterResponse
     */
    public function createRecommenderFilter(CreateRecommenderFilterRequest $args)
    {
        $result = parent::createRecommenderFilter($args->toArray());
        return new CreateRecommenderFilterResponse($result->toArray());
    }
}
