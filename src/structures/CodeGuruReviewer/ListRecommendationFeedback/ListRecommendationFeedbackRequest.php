<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\ListRecommendationFeedback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $CodeReviewArn
 * @property list<string> $UserIds
 * @property list<string> $RecommendationIds
 */
class ListRecommendationFeedbackRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     CodeReviewArn: string,
     *     UserIds?: list<string>,
     *     RecommendationIds?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
