<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\ListCodeReviews;

trait ListCodeReviewsTrait
{
    /**
     * @param ListCodeReviewsRequest $args
     * @return ListCodeReviewsResponse
     */
    public function listCodeReviews(ListCodeReviewsRequest $args)
    {
        $result = parent::listCodeReviews($args->toArray());
        return new ListCodeReviewsResponse($result->toArray());
    }
}
