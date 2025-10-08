<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListLensReviews;

trait ListLensReviewsTrait
{
    /**
     * @param ListLensReviewsRequest $args
     * @return ListLensReviewsResponse
     */
    public function listLensReviews(ListLensReviewsRequest $args)
    {
        $result = parent::listLensReviews($args->toArray());
        return new ListLensReviewsResponse($result->toArray());
    }
}
