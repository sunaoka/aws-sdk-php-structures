<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetAutomationRuleV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<OcsfStringFilter>|null $StringFilters
 * @property list<OcsfDateFilter>|null $DateFilters
 * @property list<OcsfBooleanFilter>|null $BooleanFilters
 * @property list<OcsfNumberFilter>|null $NumberFilters
 * @property list<OcsfMapFilter>|null $MapFilters
 * @property list<OcsfIpFilter>|null $IpFilters
 * @property list<CompositeFilter>|null $NestedCompositeFilters
 * @property 'AND'|'OR'|null $Operator
 */
class CompositeFilter extends Shape
{
    /**
     * @param array{
     *     StringFilters?: list<OcsfStringFilter>|null,
     *     DateFilters?: list<OcsfDateFilter>|null,
     *     BooleanFilters?: list<OcsfBooleanFilter>|null,
     *     NumberFilters?: list<OcsfNumberFilter>|null,
     *     MapFilters?: list<OcsfMapFilter>|null,
     *     IpFilters?: list<OcsfIpFilter>|null,
     *     NestedCompositeFilters?: list<CompositeFilter>|null,
     *     Operator?: 'AND'|'OR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
