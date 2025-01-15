<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $PipelineExecutionArn
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property 'Ascending'|'Descending'|null $SortOrder
 */
class ListPipelineExecutionStepsRequest extends Request
{
    /**
     * @param array{
     *     PipelineExecutionArn?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     SortOrder?: 'Ascending'|'Descending'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
