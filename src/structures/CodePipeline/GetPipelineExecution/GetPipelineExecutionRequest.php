<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineName
 * @property string $pipelineExecutionId
 */
class GetPipelineExecutionRequest extends Request
{
    /**
     * @param array{
     *     pipelineName: string,
     *     pipelineExecutionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
