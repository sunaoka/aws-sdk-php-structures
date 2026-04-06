<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\DeleteDeploymentGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $hook
 */
class AutoScalingGroup extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     hook?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
