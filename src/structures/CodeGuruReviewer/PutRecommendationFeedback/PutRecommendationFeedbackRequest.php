<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\PutRecommendationFeedback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CodeReviewArn
 * @property string $RecommendationId
 * @property list<'ThumbsUp'|'ThumbsDown'> $Reactions
 */
class PutRecommendationFeedbackRequest extends Request
{
    /**
     * @param array{
     *     CodeReviewArn: string,
     *     RecommendationId: string,
     *     Reactions: list<'ThumbsUp'|'ThumbsDown'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
