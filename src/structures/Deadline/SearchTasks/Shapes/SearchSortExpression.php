<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UserJobsFirst $userJobsFirst
 * @property FieldSortExpression $fieldSort
 * @property ParameterSortExpression $parameterSort
 */
class SearchSortExpression extends Shape
{
    /**
     * @param array{
     *     userJobsFirst?: UserJobsFirst,
     *     fieldSort?: FieldSortExpression,
     *     parameterSort?: ParameterSortExpression
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
