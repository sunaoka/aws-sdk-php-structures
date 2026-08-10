<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LEAST_OUTSTANDING_REQUESTS'|'RANDOM'|'PREFIX_AWARE' $RoutingStrategy
 * @property PrefixAwareRoutingConfig|null $PrefixAwareRoutingConfig
 */
class ProductionVariantRoutingConfig extends Shape
{
    /**
     * @param array{
     *     RoutingStrategy: 'LEAST_OUTSTANDING_REQUESTS'|'RANDOM'|'PREFIX_AWARE',
     *     PrefixAwareRoutingConfig?: PrefixAwareRoutingConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
