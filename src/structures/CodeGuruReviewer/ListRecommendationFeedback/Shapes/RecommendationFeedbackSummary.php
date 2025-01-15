<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\ListRecommendationFeedback\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RecommendationId
 * @property list<'ThumbsUp'|'ThumbsDown'>|null $Reactions
 * @property string|null $UserId
 */
class RecommendationFeedbackSummary extends Shape
{
    /**
     * @param array{
     *     RecommendationId?: string|null,
     *     Reactions?: list<'ThumbsUp'|'ThumbsDown'>|null,
     *     UserId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
