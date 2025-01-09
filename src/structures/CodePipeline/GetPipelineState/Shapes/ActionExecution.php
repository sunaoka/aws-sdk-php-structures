<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionExecutionId
 * @property 'InProgress'|'Abandoned'|'Succeeded'|'Failed' $status
 * @property string $summary
 * @property \Aws\Api\DateTimeResult $lastStatusChange
 * @property string $token
 * @property string $lastUpdatedBy
 * @property string $externalExecutionId
 * @property string $externalExecutionUrl
 * @property int<0, 100> $percentComplete
 * @property ErrorDetails $errorDetails
 * @property string $logStreamARN
 */
class ActionExecution extends Shape
{
    /**
     * @param array{
     *     actionExecutionId?: string,
     *     status?: 'InProgress'|'Abandoned'|'Succeeded'|'Failed',
     *     summary?: string,
     *     lastStatusChange?: \Aws\Api\DateTimeResult,
     *     token?: string,
     *     lastUpdatedBy?: string,
     *     externalExecutionId?: string,
     *     externalExecutionUrl?: string,
     *     percentComplete?: int<0, 100>,
     *     errorDetails?: ErrorDetails,
     *     logStreamARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
