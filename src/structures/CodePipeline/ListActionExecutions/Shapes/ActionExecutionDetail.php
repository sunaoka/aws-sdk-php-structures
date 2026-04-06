<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListActionExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $pipelineExecutionId
 * @property string|null $actionExecutionId
 * @property int<1, max>|null $pipelineVersion
 * @property string|null $stageName
 * @property string|null $actionName
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdateTime
 * @property string|null $updatedBy
 * @property 'InProgress'|'Abandoned'|'Succeeded'|'Failed'|null $status
 * @property ActionExecutionInput|null $input
 * @property ActionExecutionOutput|null $output
 */
class ActionExecutionDetail extends Shape
{
    /**
     * @param array{
     *     pipelineExecutionId?: string|null,
     *     actionExecutionId?: string|null,
     *     pipelineVersion?: int<1, max>|null,
     *     stageName?: string|null,
     *     actionName?: string|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null,
     *     status?: 'InProgress'|'Abandoned'|'Succeeded'|'Failed'|null,
     *     input?: ActionExecutionInput|null,
     *     output?: ActionExecutionOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
