<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAssetFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RowFilter> $and
 * @property RowFilterExpression $expression
 * @property list<RowFilter> $or
 */
class RowFilter extends Shape
{
    /**
     * @param array{
     *     and?: list<RowFilter>,
     *     expression?: RowFilterExpression,
     *     or?: list<RowFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
