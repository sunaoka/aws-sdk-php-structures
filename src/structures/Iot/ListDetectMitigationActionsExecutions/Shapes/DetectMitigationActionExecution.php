<?php

namespace Sunaoka\Aws\Structures\Iot\ListDetectMitigationActionsExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $taskId
 * @property string|null $violationId
 * @property string|null $actionName
 * @property string|null $thingName
 * @property \Aws\Api\DateTimeResult|null $executionStartDate
 * @property \Aws\Api\DateTimeResult|null $executionEndDate
 * @property 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'SKIPPED'|null $status
 * @property string|null $errorCode
 * @property string|null $message
 */
class DetectMitigationActionExecution extends Shape
{
    /**
     * @param array{
     *     taskId?: string|null,
     *     violationId?: string|null,
     *     actionName?: string|null,
     *     thingName?: string|null,
     *     executionStartDate?: \Aws\Api\DateTimeResult|null,
     *     executionEndDate?: \Aws\Api\DateTimeResult|null,
     *     status?: 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'SKIPPED'|null,
     *     errorCode?: string|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
