<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\StartRecommender;

trait StartRecommenderTrait
{
    /**
     * @param StartRecommenderRequest $args
     * @return StartRecommenderResponse
     */
    public function startRecommender(StartRecommenderRequest $args)
    {
        $result = parent::startRecommender($args->toArray());
        return new StartRecommenderResponse($result->toArray());
    }
}
