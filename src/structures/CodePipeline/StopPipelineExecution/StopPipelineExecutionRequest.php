<?php

namespace Sunaoka\Aws\Structures\CodePipeline\StopPipelineExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineName
 * @property string $pipelineExecutionId
 * @property bool|null $abandon
 * @property string|null $reason
 */
class StopPipelineExecutionRequest extends Request
{
    /**
     * @param array{
     *     pipelineName: string,
     *     pipelineExecutionId: string,
     *     abandon?: bool|null,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
