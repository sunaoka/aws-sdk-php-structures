<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelCardExportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelCardName
 * @property int|null $ModelCardVersion
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property string|null $ModelCardExportJobNameContains
 * @property 'InProgress'|'Completed'|'Failed'|null $StatusEquals
 * @property 'Name'|'CreationTime'|'Status'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListModelCardExportJobsRequest extends Request
{
    /**
     * @param array{
     *     ModelCardName: string,
     *     ModelCardVersion?: int|null,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     ModelCardExportJobNameContains?: string|null,
     *     StatusEquals?: 'InProgress'|'Completed'|'Failed'|null,
     *     SortBy?: 'Name'|'CreationTime'|'Status'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
