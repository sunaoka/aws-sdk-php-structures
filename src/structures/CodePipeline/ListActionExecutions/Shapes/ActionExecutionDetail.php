<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListActionExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $pipelineExecutionId
 * @property string $actionExecutionId
 * @property int<1, max> $pipelineVersion
 * @property string $stageName
 * @property string $actionName
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 * @property string $updatedBy
 * @property 'InProgress'|'Abandoned'|'Succeeded'|'Failed' $status
 * @property ActionExecutionInput $input
 * @property ActionExecutionOutput $output
 */
class ActionExecutionDetail extends Shape
{
    /**
     * @param array{
     *     pipelineExecutionId?: string,
     *     actionExecutionId?: string,
     *     pipelineVersion?: int<1, max>,
     *     stageName?: string,
     *     actionName?: string,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult,
     *     updatedBy?: string,
     *     status?: 'InProgress'|'Abandoned'|'Succeeded'|'Failed',
     *     input?: ActionExecutionInput,
     *     output?: ActionExecutionOutput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
