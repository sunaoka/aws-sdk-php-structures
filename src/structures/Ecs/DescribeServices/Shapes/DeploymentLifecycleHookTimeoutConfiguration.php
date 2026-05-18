<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 20160>|null $timeoutInMinutes
 * @property 'ROLLBACK'|'CONTINUE'|null $action
 */
class DeploymentLifecycleHookTimeoutConfiguration extends Shape
{
    /**
     * @param array{
     *     timeoutInMinutes?: int<1, 20160>|null,
     *     action?: 'ROLLBACK'|'CONTINUE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
