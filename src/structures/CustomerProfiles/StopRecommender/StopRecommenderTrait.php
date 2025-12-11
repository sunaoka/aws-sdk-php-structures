<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\StopRecommender;

trait StopRecommenderTrait
{
    /**
     * @param StopRecommenderRequest $args
     * @return StopRecommenderResponse
     */
    public function stopRecommender(StopRecommenderRequest $args)
    {
        $result = parent::stopRecommender($args->toArray());
        return new StopRecommenderResponse($result->toArray());
    }
}
