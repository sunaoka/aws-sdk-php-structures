<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListCodeReviewJobsForCodeReview;

trait ListCodeReviewJobsForCodeReviewTrait
{
    /**
     * @param ListCodeReviewJobsForCodeReviewRequest $args
     * @return ListCodeReviewJobsForCodeReviewResponse
     */
    public function listCodeReviewJobsForCodeReview(ListCodeReviewJobsForCodeReviewRequest $args)
    {
        $result = parent::listCodeReviewJobsForCodeReview($args->toArray());
        return new ListCodeReviewJobsForCodeReviewResponse($result->toArray());
    }
}
