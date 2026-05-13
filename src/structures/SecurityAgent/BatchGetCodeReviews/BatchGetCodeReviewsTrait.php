<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetCodeReviews;

trait BatchGetCodeReviewsTrait
{
    /**
     * @param BatchGetCodeReviewsRequest $args
     * @return BatchGetCodeReviewsResponse
     */
    public function batchGetCodeReviews(BatchGetCodeReviewsRequest $args)
    {
        $result = parent::batchGetCodeReviews($args->toArray());
        return new BatchGetCodeReviewsResponse($result->toArray());
    }
}
