<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelines;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineNamePrefix
 * @property \Aws\Api\DateTimeResult $CreatedAfter
 * @property \Aws\Api\DateTimeResult $CreatedBefore
 * @property 'Name'|'CreationTime' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListPipelinesRequest extends Request
{
    /**
     * @param array{
     *     PipelineNamePrefix?: string,
     *     CreatedAfter?: \Aws\Api\DateTimeResult,
     *     CreatedBefore?: \Aws\Api\DateTimeResult,
     *     SortBy?: 'Name'|'CreationTime',
     *     SortOrder?: 'Ascending'|'Descending',
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
