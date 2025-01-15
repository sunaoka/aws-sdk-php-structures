<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\DescribeRecommendationFeedback\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CodeReviewArn
 * @property string|null $RecommendationId
 * @property list<'ThumbsUp'|'ThumbsDown'>|null $Reactions
 * @property string|null $UserId
 * @property \Aws\Api\DateTimeResult|null $CreatedTimeStamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimeStamp
 */
class RecommendationFeedback extends Shape
{
    /**
     * @param array{
     *     CodeReviewArn?: string|null,
     *     RecommendationId?: string|null,
     *     Reactions?: list<'ThumbsUp'|'ThumbsDown'>|null,
     *     UserId?: string|null,
     *     CreatedTimeStamp?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTimeStamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
