<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\ListRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 300>|null $MaxResults
 * @property string $CodeReviewArn
 */
class ListRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 300>|null,
     *     CodeReviewArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
