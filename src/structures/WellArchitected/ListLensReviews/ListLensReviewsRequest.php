<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListLensReviews;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property int<1, 100> $MilestoneNumber
 * @property string $NextToken
 * @property int<1, 50> $MaxResults
 */
class ListLensReviewsRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     MilestoneNumber?: int<1, 100>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 50>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
