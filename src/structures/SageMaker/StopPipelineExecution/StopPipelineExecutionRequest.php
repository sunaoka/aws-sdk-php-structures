<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopPipelineExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineExecutionArn
 * @property string $ClientRequestToken
 */
class StopPipelineExecutionRequest extends Request
{
    /**
     * @param array{
     *     PipelineExecutionArn: string,
     *     ClientRequestToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
