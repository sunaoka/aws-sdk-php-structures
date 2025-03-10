<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineName
 * @property \Aws\Api\DateTimeResult|null $CreatedAfter
 * @property \Aws\Api\DateTimeResult|null $CreatedBefore
 * @property 'CreationTime'|'PipelineExecutionArn'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListPipelineExecutionsRequest extends Request
{
    /**
     * @param array{
     *     PipelineName: string,
     *     CreatedAfter?: \Aws\Api\DateTimeResult|null,
     *     CreatedBefore?: \Aws\Api\DateTimeResult|null,
     *     SortBy?: 'CreationTime'|'PipelineExecutionArn'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
