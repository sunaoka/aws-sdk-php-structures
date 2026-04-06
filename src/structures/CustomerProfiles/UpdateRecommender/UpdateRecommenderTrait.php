<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateRecommender;

trait UpdateRecommenderTrait
{
    /**
     * @param UpdateRecommenderRequest $args
     * @return UpdateRecommenderResponse
     */
    public function updateRecommender(UpdateRecommenderRequest $args)
    {
        $result = parent::updateRecommender($args->toArray());
        return new UpdateRecommenderResponse($result->toArray());
    }
}
