<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelCardExportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelCardName
 * @property int $ModelCardVersion
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property string $ModelCardExportJobNameContains
 * @property 'InProgress'|'Completed'|'Failed' $StatusEquals
 * @property 'Name'|'CreationTime'|'Status' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListModelCardExportJobsRequest extends Request
{
    /**
     * @param array{
     *     ModelCardName: string,
     *     ModelCardVersion?: int,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     ModelCardExportJobNameContains?: string,
     *     StatusEquals?: 'InProgress'|'Completed'|'Failed',
     *     SortBy?: 'Name'|'CreationTime'|'Status',
     *     SortOrder?: 'Ascending'|'Descending',
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
