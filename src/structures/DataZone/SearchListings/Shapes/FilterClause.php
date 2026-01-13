<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Filter|null $filter
 * @property list<FilterClause>|null $and
 * @property list<FilterClause>|null $or
 */
class FilterClause extends Shape
{
    /**
     * @param array{
     *     filter?: Filter|null,
     *     and?: list<FilterClause>|null,
     *     or?: list<FilterClause>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
