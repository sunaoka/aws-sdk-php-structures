<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\DescribeRecommendationFeedback;

trait DescribeRecommendationFeedbackTrait
{
    /**
     * @param DescribeRecommendationFeedbackRequest $args
     * @return DescribeRecommendationFeedbackResponse
     */
    public function describeRecommendationFeedback(DescribeRecommendationFeedbackRequest $args)
    {
        $result = parent::describeRecommendationFeedback($args->toArray());
        return new DescribeRecommendationFeedbackResponse($result->toArray());
    }
}
