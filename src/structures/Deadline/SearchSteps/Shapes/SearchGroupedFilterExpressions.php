<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SearchFilterExpression> $filters
 * @property 'AND'|'OR' $operator
 */
class SearchGroupedFilterExpressions extends Shape
{
    /**
     * @param array{
     *     filters: list<SearchFilterExpression>,
     *     operator: 'AND'|'OR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
