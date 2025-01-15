<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListCodeRepositories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeAfter
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeBefore
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NameContains
 * @property string|null $NextToken
 * @property 'Name'|'CreationTime'|'LastModifiedTime'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 */
class ListCodeRepositoriesRequest extends Request
{
    /**
     * @param array{
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     MaxResults?: int<1, 100>|null,
     *     NameContains?: string|null,
     *     NextToken?: string|null,
     *     SortBy?: 'Name'|'CreationTime'|'LastModifiedTime'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
