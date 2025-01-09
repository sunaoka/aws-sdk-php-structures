<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelCardVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property int $MaxResults
 * @property string $ModelCardName
 * @property 'Draft'|'PendingReview'|'Approved'|'Archived' $ModelCardStatus
 * @property string $NextToken
 * @property 'Version' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 */
class ListModelCardVersionsRequest extends Request
{
    /**
     * @param array{
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     MaxResults?: int,
     *     ModelCardName: string,
     *     ModelCardStatus?: 'Draft'|'PendingReview'|'Approved'|'Archived',
     *     NextToken?: string,
     *     SortBy?: 'Version',
     *     SortOrder?: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
