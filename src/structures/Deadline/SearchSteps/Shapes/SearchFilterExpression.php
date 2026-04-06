<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DateTimeFilterExpression|null $dateTimeFilter
 * @property ParameterFilterExpression|null $parameterFilter
 * @property SearchTermFilterExpression|null $searchTermFilter
 * @property StringFilterExpression|null $stringFilter
 * @property SearchGroupedFilterExpressions|null $groupFilter
 */
class SearchFilterExpression extends Shape
{
    /**
     * @param array{
     *     dateTimeFilter?: DateTimeFilterExpression|null,
     *     parameterFilter?: ParameterFilterExpression|null,
     *     searchTermFilter?: SearchTermFilterExpression|null,
     *     stringFilter?: StringFilterExpression|null,
     *     groupFilter?: SearchGroupedFilterExpressions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
