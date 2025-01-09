<?php

namespace Sunaoka\Aws\Structures\MTurk\ListReviewableHITs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HITTypeId
 * @property 'Reviewable'|'Reviewing' $Status
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListReviewableHITsRequest extends Request
{
    /**
     * @param array{
     *     HITTypeId?: string,
     *     Status?: 'Reviewable'|'Reviewing',
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
