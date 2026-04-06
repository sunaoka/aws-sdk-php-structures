<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LEAST_OUTSTANDING_REQUESTS'|'RANDOM' $RoutingStrategy
 */
class ProductionVariantRoutingConfig extends Shape
{
    /**
     * @param array{RoutingStrategy: 'LEAST_OUTSTANDING_REQUESTS'|'RANDOM'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
