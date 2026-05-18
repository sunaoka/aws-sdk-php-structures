<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $hookId
 * @property 'AWS_LAMBDA'|'PAUSE'|null $targetType
 * @property string|null $targetArn
 * @property 'AWAITING_ACTION'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|null $status
 * @property \Aws\Api\DateTimeResult|null $expiresAt
 * @property 'ROLLBACK'|'CONTINUE'|null $timeoutAction
 */
class DeploymentLifecycleHookDetail extends Shape
{
    /**
     * @param array{
     *     hookId?: string|null,
     *     targetType?: 'AWS_LAMBDA'|'PAUSE'|null,
     *     targetArn?: string|null,
     *     status?: 'AWAITING_ACTION'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|null,
     *     expiresAt?: \Aws\Api\DateTimeResult|null,
     *     timeoutAction?: 'ROLLBACK'|'CONTINUE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
