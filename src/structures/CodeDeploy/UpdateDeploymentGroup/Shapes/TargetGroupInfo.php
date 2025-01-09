<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\UpdateDeploymentGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 */
class TargetGroupInfo extends Shape
{
    /**
     * @param array{name?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
