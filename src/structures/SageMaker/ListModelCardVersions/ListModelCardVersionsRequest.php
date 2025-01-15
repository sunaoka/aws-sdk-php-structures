<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelCardVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property int<1, 100>|null $MaxResults
 * @property string $ModelCardName
 * @property 'Draft'|'PendingReview'|'Approved'|'Archived'|null $ModelCardStatus
 * @property string|null $NextToken
 * @property 'Version'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 */
class ListModelCardVersionsRequest extends Request
{
    /**
     * @param array{
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     MaxResults?: int<1, 100>|null,
     *     ModelCardName: string,
     *     ModelCardStatus?: 'Draft'|'PendingReview'|'Approved'|'Archived'|null,
     *     NextToken?: string|null,
     *     SortBy?: 'Version'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
