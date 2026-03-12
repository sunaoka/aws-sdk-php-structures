<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DeleteRecommenderFilter;

trait DeleteRecommenderFilterTrait
{
    /**
     * @param DeleteRecommenderFilterRequest $args
     * @return DeleteRecommenderFilterResponse
     */
    public function deleteRecommenderFilter(DeleteRecommenderFilterRequest $args)
    {
        $result = parent::deleteRecommenderFilter($args->toArray());
        return new DeleteRecommenderFilterResponse($result->toArray());
    }
}
