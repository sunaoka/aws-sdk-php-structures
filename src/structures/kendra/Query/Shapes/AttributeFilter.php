<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AttributeFilter>|null $AndAllFilters
 * @property list<AttributeFilter>|null $OrAllFilters
 * @property AttributeFilter|null $NotFilter
 * @property DocumentAttribute|null $EqualsTo
 * @property DocumentAttribute|null $ContainsAll
 * @property DocumentAttribute|null $ContainsAny
 * @property DocumentAttribute|null $GreaterThan
 * @property DocumentAttribute|null $GreaterThanOrEquals
 * @property DocumentAttribute|null $LessThan
 * @property DocumentAttribute|null $LessThanOrEquals
 */
class AttributeFilter extends Shape
{
    /**
     * @param array{
     *     AndAllFilters?: list<AttributeFilter>|null,
     *     OrAllFilters?: list<AttributeFilter>|null,
     *     NotFilter?: AttributeFilter|null,
     *     EqualsTo?: DocumentAttribute|null,
     *     ContainsAll?: DocumentAttribute|null,
     *     ContainsAny?: DocumentAttribute|null,
     *     GreaterThan?: DocumentAttribute|null,
     *     GreaterThanOrEquals?: DocumentAttribute|null,
     *     LessThan?: DocumentAttribute|null,
     *     LessThanOrEquals?: DocumentAttribute|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
