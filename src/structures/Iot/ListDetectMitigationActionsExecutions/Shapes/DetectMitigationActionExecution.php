<?php

namespace Sunaoka\Aws\Structures\Iot\ListDetectMitigationActionsExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $taskId
 * @property string $violationId
 * @property string $actionName
 * @property string $thingName
 * @property \Aws\Api\DateTimeResult $executionStartDate
 * @property \Aws\Api\DateTimeResult $executionEndDate
 * @property 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'SKIPPED' $status
 * @property string $errorCode
 * @property string $message
 */
class DetectMitigationActionExecution extends Shape
{
    /**
     * @param array{
     *     taskId?: string,
     *     violationId?: string,
     *     actionName?: string,
     *     thingName?: string,
     *     executionStartDate?: \Aws\Api\DateTimeResult,
     *     executionEndDate?: \Aws\Api\DateTimeResult,
     *     status?: 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'SKIPPED',
     *     errorCode?: string,
     *     message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
