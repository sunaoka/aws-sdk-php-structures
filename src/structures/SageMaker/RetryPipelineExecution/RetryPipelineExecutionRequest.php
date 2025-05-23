<?php

namespace Sunaoka\Aws\Structures\SageMaker\RetryPipelineExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineExecutionArn
 * @property string $ClientRequestToken
 * @property Shapes\ParallelismConfiguration|null $ParallelismConfiguration
 */
class RetryPipelineExecutionRequest extends Request
{
    /**
     * @param array{
     *     PipelineExecutionArn: string,
     *     ClientRequestToken: string,
     *     ParallelismConfiguration?: Shapes\ParallelismConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
