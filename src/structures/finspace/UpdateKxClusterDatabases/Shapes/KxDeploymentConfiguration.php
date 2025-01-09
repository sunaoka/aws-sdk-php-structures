<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxClusterDatabases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NO_RESTART'|'ROLLING' $deploymentStrategy
 */
class KxDeploymentConfiguration extends Shape
{
    /**
     * @param array{deploymentStrategy: 'NO_RESTART'|'ROLLING'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
