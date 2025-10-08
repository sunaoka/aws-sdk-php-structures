<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\DescribeCodeReview;

trait DescribeCodeReviewTrait
{
    /**
     * @param DescribeCodeReviewRequest $args
     * @return DescribeCodeReviewResponse
     */
    public function describeCodeReview(DescribeCodeReviewRequest $args)
    {
        $result = parent::describeCodeReview($args->toArray());
        return new DescribeCodeReviewResponse($result->toArray());
    }
}
