<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetSoftwareV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SoftwareStringFilter>|null $StringFilters
 * @property list<SoftwareCompositeFilter>|null $NestedCompositeFilters
 * @property 'AND'|'OR'|null $Operator
 */
class SoftwareCompositeFilter extends Shape
{
    /**
     * @param array{
     *     StringFilters?: list<SoftwareStringFilter>|null,
     *     NestedCompositeFilters?: list<SoftwareCompositeFilter>|null,
     *     Operator?: 'AND'|'OR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
