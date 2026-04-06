<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingsTrendsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FindingsTrendsStringFilter>|null $StringFilters
 * @property list<FindingsTrendsCompositeFilter>|null $NestedCompositeFilters
 * @property 'AND'|'OR'|null $Operator
 */
class FindingsTrendsCompositeFilter extends Shape
{
    /**
     * @param array{
     *     StringFilters?: list<FindingsTrendsStringFilter>|null,
     *     NestedCompositeFilters?: list<FindingsTrendsCompositeFilter>|null,
     *     Operator?: 'AND'|'OR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
