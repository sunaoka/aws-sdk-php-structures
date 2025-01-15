<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\DescribeRecommendationFeedback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CodeReviewArn
 * @property string $RecommendationId
 * @property string|null $UserId
 */
class DescribeRecommendationFeedbackRequest extends Request
{
    /**
     * @param array{
     *     CodeReviewArn: string,
     *     RecommendationId: string,
     *     UserId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
