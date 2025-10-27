<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesStatisticsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ResourcesStringFilter>|null $StringFilters
 * @property list<ResourcesDateFilter>|null $DateFilters
 * @property list<ResourcesNumberFilter>|null $NumberFilters
 * @property list<ResourcesMapFilter>|null $MapFilters
 * @property list<ResourcesCompositeFilter>|null $NestedCompositeFilters
 * @property 'AND'|'OR'|null $Operator
 */
class ResourcesCompositeFilter extends Shape
{
    /**
     * @param array{
     *     StringFilters?: list<ResourcesStringFilter>|null,
     *     DateFilters?: list<ResourcesDateFilter>|null,
     *     NumberFilters?: list<ResourcesNumberFilter>|null,
     *     MapFilters?: list<ResourcesMapFilter>|null,
     *     NestedCompositeFilters?: list<ResourcesCompositeFilter>|null,
     *     Operator?: 'AND'|'OR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
