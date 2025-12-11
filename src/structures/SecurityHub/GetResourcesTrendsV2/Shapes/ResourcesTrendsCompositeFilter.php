<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesTrendsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ResourcesTrendsStringFilter>|null $StringFilters
 * @property list<ResourcesTrendsCompositeFilter>|null $NestedCompositeFilters
 * @property 'AND'|'OR'|null $Operator
 */
class ResourcesTrendsCompositeFilter extends Shape
{
    /**
     * @param array{
     *     StringFilters?: list<ResourcesTrendsStringFilter>|null,
     *     NestedCompositeFilters?: list<ResourcesTrendsCompositeFilter>|null,
     *     Operator?: 'AND'|'OR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
