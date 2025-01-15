<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Filter>|null $Filters
 * @property list<NestedFilters>|null $NestedFilters
 * @property list<SearchExpression>|null $SubExpressions
 * @property 'And'|'Or'|null $Operator
 */
class SearchExpression extends Shape
{
    /**
     * @param array{
     *     Filters?: list<Filter>|null,
     *     NestedFilters?: list<NestedFilters>|null,
     *     SubExpressions?: list<SearchExpression>|null,
     *     Operator?: 'And'|'Or'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
