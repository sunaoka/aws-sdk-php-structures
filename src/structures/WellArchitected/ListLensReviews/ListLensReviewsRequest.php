<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListLensReviews;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property int $MilestoneNumber
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListLensReviewsRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     MilestoneNumber?: int,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
