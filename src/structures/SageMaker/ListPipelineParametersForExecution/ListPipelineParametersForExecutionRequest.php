<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineParametersForExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineExecutionArn
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListPipelineParametersForExecutionRequest extends Request
{
    /**
     * @param array{
     *     PipelineExecutionArn: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
