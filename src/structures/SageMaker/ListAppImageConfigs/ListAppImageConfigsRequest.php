<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAppImageConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property string $NameContains
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $ModifiedTimeBefore
 * @property \Aws\Api\DateTimeResult $ModifiedTimeAfter
 * @property 'CreationTime'|'LastModifiedTime'|'Name' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 */
class ListAppImageConfigsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     NameContains?: string,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     ModifiedTimeBefore?: \Aws\Api\DateTimeResult,
     *     ModifiedTimeAfter?: \Aws\Api\DateTimeResult,
     *     SortBy?: 'CreationTime'|'LastModifiedTime'|'Name',
     *     SortOrder?: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
