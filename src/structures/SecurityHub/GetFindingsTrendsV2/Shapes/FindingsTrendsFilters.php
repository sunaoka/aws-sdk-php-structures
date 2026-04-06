<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingsTrendsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FindingsTrendsCompositeFilter>|null $CompositeFilters
 * @property 'AND'|'OR'|null $CompositeOperator
 */
class FindingsTrendsFilters extends Shape
{
    /**
     * @param array{
     *     CompositeFilters?: list<FindingsTrendsCompositeFilter>|null,
     *     CompositeOperator?: 'AND'|'OR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
