<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\ListRecommendationFeedback\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RecommendationId
 * @property list<'ThumbsUp'|'ThumbsDown'> $Reactions
 * @property string $UserId
 */
class RecommendationFeedbackSummary extends Shape
{
    /**
     * @param array{
     *     RecommendationId?: string,
     *     Reactions?: list<'ThumbsUp'|'ThumbsDown'>,
     *     UserId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
