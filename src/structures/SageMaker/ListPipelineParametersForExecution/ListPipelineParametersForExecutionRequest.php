<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineParametersForExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineExecutionArn
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListPipelineParametersForExecutionRequest extends Request
{
    /**
     * @param array{
     *     PipelineExecutionArn: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
