<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListCodeRepositories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeAfter
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeBefore
 * @property int $MaxResults
 * @property string $NameContains
 * @property string $NextToken
 * @property 'Name'|'CreationTime'|'LastModifiedTime' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 */
class ListCodeRepositoriesRequest extends Request
{
    /**
     * @param array{
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult,
     *     MaxResults?: int,
     *     NameContains?: string,
     *     NextToken?: string,
     *     SortBy?: 'Name'|'CreationTime'|'LastModifiedTime',
     *     SortOrder?: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
