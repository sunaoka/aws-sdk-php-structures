<?php

namespace Sunaoka\Aws\Structures\Personalize\StartRecommender;

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
