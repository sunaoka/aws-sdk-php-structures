<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Filter> $Filters
 * @property list<NestedFilters> $NestedFilters
 * @property list<SearchExpression> $SubExpressions
 * @property 'And'|'Or' $Operator
 */
class SearchExpression extends Shape
{
    /**
     * @param array{
     *     Filters?: list<Filter>,
     *     NestedFilters?: list<NestedFilters>,
     *     SubExpressions?: list<SearchExpression>,
     *     Operator?: 'And'|'Or'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
