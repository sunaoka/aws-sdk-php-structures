<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UserJobsFirst|null $userJobsFirst
 * @property FieldSortExpression|null $fieldSort
 * @property ParameterSortExpression|null $parameterSort
 */
class SearchSortExpression extends Shape
{
    /**
     * @param array{
     *     userJobsFirst?: UserJobsFirst|null,
     *     fieldSort?: FieldSortExpression|null,
     *     parameterSort?: ParameterSortExpression|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
