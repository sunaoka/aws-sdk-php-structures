<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $executionId
 * @property string|null $actionType
 * @property TargetResource $targetResource
 * @property string $targetResourceVersion
 * @property ResolveTo|null $resolveTo
 * @property \Aws\Api\DateTimeResult $executionStartTime
 * @property \Aws\Api\DateTimeResult|null $executionEndTime
 * @property ExecutionStatus $executionStatus
 * @property string|null $executionEntityVersion
 */
class ExecutionSummary extends Shape
{
    /**
     * @param array{
     *     executionId: string,
     *     actionType?: string|null,
     *     targetResource: TargetResource,
     *     targetResourceVersion: string,
     *     resolveTo?: ResolveTo|null,
     *     executionStartTime: \Aws\Api\DateTimeResult,
     *     executionEndTime?: \Aws\Api\DateTimeResult|null,
     *     executionStatus: ExecutionStatus,
     *     executionEntityVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
