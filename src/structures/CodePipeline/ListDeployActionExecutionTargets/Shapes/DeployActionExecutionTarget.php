<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListDeployActionExecutionTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $targetId
 * @property string|null $targetType
 * @property string|null $status
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property list<DeployTargetEvent>|null $events
 */
class DeployActionExecutionTarget extends Shape
{
    /**
     * @param array{
     *     targetId?: string|null,
     *     targetType?: string|null,
     *     status?: string|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     events?: list<DeployTargetEvent>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
