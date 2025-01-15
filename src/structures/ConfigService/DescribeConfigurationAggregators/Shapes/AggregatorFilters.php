<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigurationAggregators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AggregatorFilterResourceType|null $ResourceType
 * @property AggregatorFilterServicePrincipal|null $ServicePrincipal
 */
class AggregatorFilters extends Shape
{
    /**
     * @param array{
     *     ResourceType?: AggregatorFilterResourceType|null,
     *     ServicePrincipal?: AggregatorFilterServicePrincipal|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
