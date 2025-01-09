<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelCards;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property int $MaxResults
 * @property string $NameContains
 * @property 'Draft'|'PendingReview'|'Approved'|'Archived' $ModelCardStatus
 * @property string $NextToken
 * @property 'Name'|'CreationTime' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 */
class ListModelCardsRequest extends Request
{
    /**
     * @param array{
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     MaxResults?: int,
     *     NameContains?: string,
     *     ModelCardStatus?: 'Draft'|'PendingReview'|'Approved'|'Archived',
     *     NextToken?: string,
     *     SortBy?: 'Name'|'CreationTime',
     *     SortOrder?: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
