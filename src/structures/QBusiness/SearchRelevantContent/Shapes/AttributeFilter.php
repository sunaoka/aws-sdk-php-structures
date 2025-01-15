<?php

namespace Sunaoka\Aws\Structures\QBusiness\SearchRelevantContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AttributeFilter>|null $andAllFilters
 * @property list<AttributeFilter>|null $orAllFilters
 * @property AttributeFilter|null $notFilter
 * @property DocumentAttribute|null $equalsTo
 * @property DocumentAttribute|null $containsAll
 * @property DocumentAttribute|null $containsAny
 * @property DocumentAttribute|null $greaterThan
 * @property DocumentAttribute|null $greaterThanOrEquals
 * @property DocumentAttribute|null $lessThan
 * @property DocumentAttribute|null $lessThanOrEquals
 */
class AttributeFilter extends Shape
{
    /**
     * @param array{
     *     andAllFilters?: list<AttributeFilter>|null,
     *     orAllFilters?: list<AttributeFilter>|null,
     *     notFilter?: AttributeFilter|null,
     *     equalsTo?: DocumentAttribute|null,
     *     containsAll?: DocumentAttribute|null,
     *     containsAny?: DocumentAttribute|null,
     *     greaterThan?: DocumentAttribute|null,
     *     greaterThanOrEquals?: DocumentAttribute|null,
     *     lessThan?: DocumentAttribute|null,
     *     lessThanOrEquals?: DocumentAttribute|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
