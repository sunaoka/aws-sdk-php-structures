<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\DescribeRecommendationFeedback\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CodeReviewArn
 * @property string $RecommendationId
 * @property list<'ThumbsUp'|'ThumbsDown'> $Reactions
 * @property string $UserId
 * @property \Aws\Api\DateTimeResult $CreatedTimeStamp
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimeStamp
 */
class RecommendationFeedback extends Shape
{
    /**
     * @param array{
     *     CodeReviewArn?: string,
     *     RecommendationId?: string,
     *     Reactions?: list<'ThumbsUp'|'ThumbsDown'>,
     *     UserId?: string,
     *     CreatedTimeStamp?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTimeStamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
