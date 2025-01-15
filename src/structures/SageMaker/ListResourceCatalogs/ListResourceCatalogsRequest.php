<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListResourceCatalogs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NameContains
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property 'CreationTime'|null $SortBy
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListResourceCatalogsRequest extends Request
{
    /**
     * @param array{
     *     NameContains?: string|null,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     SortBy?: 'CreationTime'|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
