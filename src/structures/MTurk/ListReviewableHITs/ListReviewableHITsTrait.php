<?php

namespace Sunaoka\Aws\Structures\MTurk\ListReviewableHITs;

trait ListReviewableHITsTrait
{
    /**
     * @param ListReviewableHITsRequest $args
     * @return ListReviewableHITsResponse
     */
    public function listReviewableHITs(ListReviewableHITsRequest $args)
    {
        $result = parent::listReviewableHITs($args->toArray());
        return new ListReviewableHITsResponse($result->toArray());
    }
}
