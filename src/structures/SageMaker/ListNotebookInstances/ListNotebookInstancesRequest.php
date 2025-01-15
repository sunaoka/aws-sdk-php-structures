<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListNotebookInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property 'Name'|'CreationTime'|'Status'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property string|null $NameContains
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeBefore
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeAfter
 * @property 'Pending'|'InService'|'Stopping'|'Stopped'|'Failed'|'Deleting'|'Updating'|null $StatusEquals
 * @property string|null $NotebookInstanceLifecycleConfigNameContains
 * @property string|null $DefaultCodeRepositoryContains
 * @property string|null $AdditionalCodeRepositoryEquals
 */
class ListNotebookInstancesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     SortBy?: 'Name'|'CreationTime'|'Status'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     NameContains?: string|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     StatusEquals?: 'Pending'|'InService'|'Stopping'|'Stopped'|'Failed'|'Deleting'|'Updating'|null,
     *     NotebookInstanceLifecycleConfigNameContains?: string|null,
     *     DefaultCodeRepositoryContains?: string|null,
     *     AdditionalCodeRepositoryEquals?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
