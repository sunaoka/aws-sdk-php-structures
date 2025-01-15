<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListLensReviews;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property int<1, 100>|null $MilestoneNumber
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class ListLensReviewsRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     MilestoneNumber?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
