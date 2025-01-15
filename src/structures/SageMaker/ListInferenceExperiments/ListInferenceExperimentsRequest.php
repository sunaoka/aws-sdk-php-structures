<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceExperiments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NameContains
 * @property 'ShadowMode'|null $Type
 * @property 'Creating'|'Created'|'Updating'|'Running'|'Starting'|'Stopping'|'Completed'|'Cancelled'|null $StatusEquals
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeAfter
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeBefore
 * @property 'Name'|'CreationTime'|'Status'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListInferenceExperimentsRequest extends Request
{
    /**
     * @param array{
     *     NameContains?: string|null,
     *     Type?: 'ShadowMode'|null,
     *     StatusEquals?: 'Creating'|'Created'|'Updating'|'Running'|'Starting'|'Stopping'|'Completed'|'Cancelled'|null,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     SortBy?: 'Name'|'CreationTime'|'Status'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
