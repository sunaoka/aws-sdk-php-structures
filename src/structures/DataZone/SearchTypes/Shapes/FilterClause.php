<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FilterClause> $and
 * @property Filter $filter
 * @property list<FilterClause> $or
 */
class FilterClause extends Shape
{
    /**
     * @param array{
     *     and?: list<FilterClause>,
     *     filter?: Filter,
     *     or?: list<FilterClause>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
