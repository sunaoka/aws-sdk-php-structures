<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DateTimeFilterExpression $dateTimeFilter
 * @property ParameterFilterExpression $parameterFilter
 * @property SearchTermFilterExpression $searchTermFilter
 * @property StringFilterExpression $stringFilter
 * @property SearchGroupedFilterExpressions $groupFilter
 */
class SearchFilterExpression extends Shape
{
    /**
     * @param array{
     *     dateTimeFilter?: DateTimeFilterExpression,
     *     parameterFilter?: ParameterFilterExpression,
     *     searchTermFilter?: SearchTermFilterExpression,
     *     stringFilter?: StringFilterExpression,
     *     groupFilter?: SearchGroupedFilterExpressions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
