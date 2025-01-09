<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceExperiments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NameContains
 * @property 'ShadowMode' $Type
 * @property 'Creating'|'Created'|'Updating'|'Running'|'Starting'|'Stopping'|'Completed'|'Cancelled' $StatusEquals
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeAfter
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeBefore
 * @property 'Name'|'CreationTime'|'Status' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListInferenceExperimentsRequest extends Request
{
    /**
     * @param array{
     *     NameContains?: string,
     *     Type?: 'ShadowMode',
     *     StatusEquals?: 'Creating'|'Created'|'Updating'|'Running'|'Starting'|'Stopping'|'Completed'|'Cancelled',
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult,
     *     SortBy?: 'Name'|'CreationTime'|'Status',
     *     SortOrder?: 'Ascending'|'Descending',
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
