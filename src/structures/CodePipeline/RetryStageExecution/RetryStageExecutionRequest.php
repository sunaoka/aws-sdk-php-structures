<?php

namespace Sunaoka\Aws\Structures\CodePipeline\RetryStageExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineName
 * @property string $stageName
 * @property string $pipelineExecutionId
 * @property 'FAILED_ACTIONS'|'ALL_ACTIONS' $retryMode
 */
class RetryStageExecutionRequest extends Request
{
    /**
     * @param array{
     *     pipelineName: string,
     *     stageName: string,
     *     pipelineExecutionId: string,
     *     retryMode: 'FAILED_ACTIONS'|'ALL_ACTIONS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
