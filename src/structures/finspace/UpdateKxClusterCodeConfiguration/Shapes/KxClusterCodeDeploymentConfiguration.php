<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxClusterCodeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NO_RESTART'|'ROLLING'|'FORCE' $deploymentStrategy
 */
class KxClusterCodeDeploymentConfiguration extends Shape
{
    /**
     * @param array{deploymentStrategy: 'NO_RESTART'|'ROLLING'|'FORCE'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
