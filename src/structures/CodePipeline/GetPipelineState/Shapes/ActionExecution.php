<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $actionExecutionId
 * @property 'InProgress'|'Abandoned'|'Succeeded'|'Failed'|null $status
 * @property string|null $summary
 * @property \Aws\Api\DateTimeResult|null $lastStatusChange
 * @property string|null $token
 * @property string|null $lastUpdatedBy
 * @property string|null $externalExecutionId
 * @property string|null $externalExecutionUrl
 * @property int<0, 100>|null $percentComplete
 * @property ErrorDetails|null $errorDetails
 * @property string|null $logStreamARN
 */
class ActionExecution extends Shape
{
    /**
     * @param array{
     *     actionExecutionId?: string|null,
     *     status?: 'InProgress'|'Abandoned'|'Succeeded'|'Failed'|null,
     *     summary?: string|null,
     *     lastStatusChange?: \Aws\Api\DateTimeResult|null,
     *     token?: string|null,
     *     lastUpdatedBy?: string|null,
     *     externalExecutionId?: string|null,
     *     externalExecutionUrl?: string|null,
     *     percentComplete?: int<0, 100>|null,
     *     errorDetails?: ErrorDetails|null,
     *     logStreamARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
