<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\ListRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $CodeReviewArn
 */
class ListRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     CodeReviewArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
