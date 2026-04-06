<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateAssetFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RowFilter>|null $and
 * @property RowFilterExpression|null $expression
 * @property list<RowFilter>|null $or
 */
class RowFilter extends Shape
{
    /**
     * @param array{
     *     and?: list<RowFilter>|null,
     *     expression?: RowFilterExpression|null,
     *     or?: list<RowFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
