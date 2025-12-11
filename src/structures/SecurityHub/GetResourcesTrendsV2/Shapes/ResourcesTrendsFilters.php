<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesTrendsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ResourcesTrendsCompositeFilter>|null $CompositeFilters
 * @property 'AND'|'OR'|null $CompositeOperator
 */
class ResourcesTrendsFilters extends Shape
{
    /**
     * @param array{
     *     CompositeFilters?: list<ResourcesTrendsCompositeFilter>|null,
     *     CompositeOperator?: 'AND'|'OR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
