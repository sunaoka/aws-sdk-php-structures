<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\StartPipelineExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property string $pipelineName
 * @property Shapes\ExecutionEnvironmentVariables|null $executionEnvironmentVariableOverrides
 * @property Shapes\MountOverrides|null $executionMountOverrides
 * @property int<0, 2>|null $executionPriority
 * @property string|null $clientToken
 */
class StartPipelineExecutionRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     pipelineName: string,
     *     executionEnvironmentVariableOverrides?: Shapes\ExecutionEnvironmentVariables|null,
     *     executionMountOverrides?: Shapes\MountOverrides|null,
     *     executionPriority?: int<0, 2>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
