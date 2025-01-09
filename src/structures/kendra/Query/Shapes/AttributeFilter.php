<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AttributeFilter> $AndAllFilters
 * @property list<AttributeFilter> $OrAllFilters
 * @property AttributeFilter $NotFilter
 * @property DocumentAttribute $EqualsTo
 * @property DocumentAttribute $ContainsAll
 * @property DocumentAttribute $ContainsAny
 * @property DocumentAttribute $GreaterThan
 * @property DocumentAttribute $GreaterThanOrEquals
 * @property DocumentAttribute $LessThan
 * @property DocumentAttribute $LessThanOrEquals
 */
class AttributeFilter extends Shape
{
    /**
     * @param array{
     *     AndAllFilters?: list<AttributeFilter>,
     *     OrAllFilters?: list<AttributeFilter>,
     *     NotFilter?: AttributeFilter,
     *     EqualsTo?: DocumentAttribute,
     *     ContainsAll?: DocumentAttribute,
     *     ContainsAny?: DocumentAttribute,
     *     GreaterThan?: DocumentAttribute,
     *     GreaterThanOrEquals?: DocumentAttribute,
     *     LessThan?: DocumentAttribute,
     *     LessThanOrEquals?: DocumentAttribute
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
