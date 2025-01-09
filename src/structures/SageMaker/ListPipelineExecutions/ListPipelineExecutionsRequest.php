<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineName
 * @property \Aws\Api\DateTimeResult $CreatedAfter
 * @property \Aws\Api\DateTimeResult $CreatedBefore
 * @property 'CreationTime'|'PipelineExecutionArn' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListPipelineExecutionsRequest extends Request
{
    /**
     * @param array{
     *     PipelineName: string,
     *     CreatedAfter?: \Aws\Api\DateTimeResult,
     *     CreatedBefore?: \Aws\Api\DateTimeResult,
     *     SortBy?: 'CreationTime'|'PipelineExecutionArn',
     *     SortOrder?: 'Ascending'|'Descending',
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
