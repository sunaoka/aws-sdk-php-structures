<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListExperiments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $CreatedAfter
 * @property \Aws\Api\DateTimeResult $CreatedBefore
 * @property 'Name'|'CreationTime' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListExperimentsRequest extends Request
{
    /**
     * @param array{
     *     CreatedAfter?: \Aws\Api\DateTimeResult,
     *     CreatedBefore?: \Aws\Api\DateTimeResult,
     *     SortBy?: 'Name'|'CreationTime',
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
