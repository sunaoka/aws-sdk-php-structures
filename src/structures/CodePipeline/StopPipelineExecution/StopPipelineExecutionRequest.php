<?php

namespace Sunaoka\Aws\Structures\CodePipeline\StopPipelineExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineName
 * @property string $pipelineExecutionId
 * @property bool $abandon
 * @property string $reason
 */
class StopPipelineExecutionRequest extends Request
{
    /**
     * @param array{
     *     pipelineName: string,
     *     pipelineExecutionId: string,
     *     abandon?: bool,
     *     reason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
