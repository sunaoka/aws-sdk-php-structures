<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAssetFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RowFilterExpression|null $expression
 * @property list<RowFilter>|null $and
 * @property list<RowFilter>|null $or
 */
class RowFilter extends Shape
{
    /**
     * @param array{
     *     expression?: RowFilterExpression|null,
     *     and?: list<RowFilter>|null,
     *     or?: list<RowFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
