<?php

namespace Sunaoka\Aws\Structures\MTurk\ListReviewableHITs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HITTypeId
 * @property 'Reviewable'|'Reviewing' $Status
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListReviewableHITsRequest extends Request
{
    /**
     * @param array{
     *     HITTypeId?: string,
     *     Status?: 'Reviewable'|'Reviewing',
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
