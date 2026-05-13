<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchDeleteCodeReviews;

trait BatchDeleteCodeReviewsTrait
{
    /**
     * @param BatchDeleteCodeReviewsRequest $args
     * @return BatchDeleteCodeReviewsResponse
     */
    public function batchDeleteCodeReviews(BatchDeleteCodeReviewsRequest $args)
    {
        $result = parent::batchDeleteCodeReviews($args->toArray());
        return new BatchDeleteCodeReviewsResponse($result->toArray());
    }
}
