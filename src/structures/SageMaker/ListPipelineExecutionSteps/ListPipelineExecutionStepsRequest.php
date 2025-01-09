<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineExecutionArn
 * @property string $NextToken
 * @property int $MaxResults
 * @property 'Ascending'|'Descending' $SortOrder
 */
class ListPipelineExecutionStepsRequest extends Request
{
    /**
     * @param array{
     *     PipelineExecutionArn?: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     SortOrder?: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
