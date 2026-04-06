<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDryRunProgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Default'|'CapacityOptimized' $DeploymentStrategy
 */
class DeploymentStrategyOptions extends Shape
{
    /**
     * @param array{DeploymentStrategy: 'Default'|'CapacityOptimized'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
