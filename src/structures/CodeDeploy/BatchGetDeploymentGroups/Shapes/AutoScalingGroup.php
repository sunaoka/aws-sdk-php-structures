<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeploymentGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $hook
 * @property string $terminationHook
 */
class AutoScalingGroup extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     hook?: string,
     *     terminationHook?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
