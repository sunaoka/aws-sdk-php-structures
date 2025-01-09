<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\ListRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 300> $MaxResults
 * @property string $CodeReviewArn
 */
class ListRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 300>,
     *     CodeReviewArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
