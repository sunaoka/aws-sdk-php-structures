<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeploymentGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $hook
 * @property string|null $terminationHook
 */
class AutoScalingGroup extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     hook?: string|null,
     *     terminationHook?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
