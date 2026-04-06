<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListRecommenders;

trait ListRecommendersTrait
{
    /**
     * @param ListRecommendersRequest $args
     * @return ListRecommendersResponse
     */
    public function listRecommenders(ListRecommendersRequest $args)
    {
        $result = parent::listRecommenders($args->toArray());
        return new ListRecommendersResponse($result->toArray());
    }
}
