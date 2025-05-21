<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListDeployActionExecutionTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $status
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property DeployTargetEventContext|null $context
 */
class DeployTargetEvent extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     status?: string|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     context?: DeployTargetEventContext|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
