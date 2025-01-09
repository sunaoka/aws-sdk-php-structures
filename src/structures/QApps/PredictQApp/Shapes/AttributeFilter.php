<?php

namespace Sunaoka\Aws\Structures\QApps\PredictQApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AttributeFilter> $andAllFilters
 * @property list<AttributeFilter> $orAllFilters
 * @property AttributeFilter $notFilter
 * @property DocumentAttribute $equalsTo
 * @property DocumentAttribute $containsAll
 * @property DocumentAttribute $containsAny
 * @property DocumentAttribute $greaterThan
 * @property DocumentAttribute $greaterThanOrEquals
 * @property DocumentAttribute $lessThan
 * @property DocumentAttribute $lessThanOrEquals
 */
class AttributeFilter extends Shape
{
    /**
     * @param array{
     *     andAllFilters?: list<AttributeFilter>,
     *     orAllFilters?: list<AttributeFilter>,
     *     notFilter?: AttributeFilter,
     *     equalsTo?: DocumentAttribute,
     *     containsAll?: DocumentAttribute,
     *     containsAny?: DocumentAttribute,
     *     greaterThan?: DocumentAttribute,
     *     greaterThanOrEquals?: DocumentAttribute,
     *     lessThan?: DocumentAttribute,
     *     lessThanOrEquals?: DocumentAttribute
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
