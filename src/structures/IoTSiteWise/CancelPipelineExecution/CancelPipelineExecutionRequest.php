<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CancelPipelineExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property string $pipelineName
 * @property string $pipelineExecutionId
 * @property string|null $reason
 */
class CancelPipelineExecutionRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     pipelineName: string,
     *     pipelineExecutionId: string,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
