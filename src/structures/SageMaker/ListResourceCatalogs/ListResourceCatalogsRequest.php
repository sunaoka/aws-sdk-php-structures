<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListResourceCatalogs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NameContains
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property 'Ascending'|'Descending' $SortOrder
 * @property 'CreationTime' $SortBy
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListResourceCatalogsRequest extends Request
{
    /**
     * @param array{
     *     NameContains?: string,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     SortOrder?: 'Ascending'|'Descending',
     *     SortBy?: 'CreationTime',
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
