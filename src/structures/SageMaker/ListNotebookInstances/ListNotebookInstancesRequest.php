<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListNotebookInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property 'Name'|'CreationTime'|'Status' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 * @property string $NameContains
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeBefore
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeAfter
 * @property 'Pending'|'InService'|'Stopping'|'Stopped'|'Failed'|'Deleting'|'Updating' $StatusEquals
 * @property string $NotebookInstanceLifecycleConfigNameContains
 * @property string $DefaultCodeRepositoryContains
 * @property string $AdditionalCodeRepositoryEquals
 */
class ListNotebookInstancesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     SortBy?: 'Name'|'CreationTime'|'Status',
     *     SortOrder?: 'Ascending'|'Descending',
     *     NameContains?: string,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult,
     *     StatusEquals?: 'Pending'|'InService'|'Stopping'|'Stopped'|'Failed'|'Deleting'|'Updating',
     *     NotebookInstanceLifecycleConfigNameContains?: string,
     *     DefaultCodeRepositoryContains?: string,
     *     AdditionalCodeRepositoryEquals?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
