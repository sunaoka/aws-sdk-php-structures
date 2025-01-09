<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigurationAggregators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AggregatorFilterResourceType $ResourceType
 * @property AggregatorFilterServicePrincipal $ServicePrincipal
 */
class AggregatorFilters extends Shape
{
    /**
     * @param array{
     *     ResourceType?: AggregatorFilterResourceType,
     *     ServicePrincipal?: AggregatorFilterServicePrincipal
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
