<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DeleteRecommender;

trait DeleteRecommenderTrait
{
    /**
     * @param DeleteRecommenderRequest $args
     * @return DeleteRecommenderResponse
     */
    public function deleteRecommender(DeleteRecommenderRequest $args)
    {
        $result = parent::deleteRecommender($args->toArray());
        return new DeleteRecommenderResponse($result->toArray());
    }
}
