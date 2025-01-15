<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\ListRecommendationFeedback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property string $CodeReviewArn
 * @property list<string>|null $UserIds
 * @property list<string>|null $RecommendationIds
 */
class ListRecommendationFeedbackRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     CodeReviewArn: string,
     *     UserIds?: list<string>|null,
     *     RecommendationIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
