<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\DescribeRecommendationFeedback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CodeReviewArn
 * @property string $RecommendationId
 * @property string $UserId
 */
class DescribeRecommendationFeedbackRequest extends Request
{
    /**
     * @param array{
     *     CodeReviewArn: string,
     *     RecommendationId: string,
     *     UserId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
