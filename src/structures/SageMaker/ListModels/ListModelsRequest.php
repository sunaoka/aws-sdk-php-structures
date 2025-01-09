<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Name'|'CreationTime' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property string $NameContains
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 */
class ListModelsRequest extends Request
{
    /**
     * @param array{
     *     SortBy?: 'Name'|'CreationTime',
     *     SortOrder?: 'Ascending'|'Descending',
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     NameContains?: string,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
