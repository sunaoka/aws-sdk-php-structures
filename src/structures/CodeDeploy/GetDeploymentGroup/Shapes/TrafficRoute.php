<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $listenerArns
 */
class TrafficRoute extends Shape
{
    /**
     * @param array{listenerArns?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
