<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineExecutionArn
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property 'Ascending'|'Descending' $SortOrder
 */
class ListPipelineExecutionStepsRequest extends Request
{
    /**
     * @param array{
     *     PipelineExecutionArn?: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     SortOrder?: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
