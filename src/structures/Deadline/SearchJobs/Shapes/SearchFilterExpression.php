<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DateTimeFilterExpression|null $dateTimeFilter
 * @property SearchGroupedFilterExpressions|null $groupFilter
 * @property ParameterFilterExpression|null $parameterFilter
 * @property SearchTermFilterExpression|null $searchTermFilter
 * @property StringFilterExpression|null $stringFilter
 */
class SearchFilterExpression extends Shape
{
    /**
     * @param array{
     *     dateTimeFilter?: DateTimeFilterExpression|null,
     *     groupFilter?: SearchGroupedFilterExpressions|null,
     *     parameterFilter?: ParameterFilterExpression|null,
     *     searchTermFilter?: SearchTermFilterExpression|null,
     *     stringFilter?: StringFilterExpression|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
