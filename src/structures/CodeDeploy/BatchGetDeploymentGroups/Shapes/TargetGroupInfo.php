<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeploymentGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 */
class TargetGroupInfo extends Shape
{
    /**
     * @param array{name?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
