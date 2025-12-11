<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetRecommender;

trait GetRecommenderTrait
{
    /**
     * @param GetRecommenderRequest $args
     * @return GetRecommenderResponse
     */
    public function getRecommender(GetRecommenderRequest $args)
    {
        $result = parent::getRecommender($args->toArray());
        return new GetRecommenderResponse($result->toArray());
    }
}
