<?php

namespace Sunaoka\Aws\Structures\MTurk\ListReviewableHITs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $HITTypeId
 * @property 'Reviewable'|'Reviewing'|null $Status
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListReviewableHITsRequest extends Request
{
    /**
     * @param array{
     *     HITTypeId?: string|null,
     *     Status?: 'Reviewable'|'Reviewing'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
