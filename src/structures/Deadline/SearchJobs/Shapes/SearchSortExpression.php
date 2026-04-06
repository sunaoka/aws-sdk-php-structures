<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldSortExpression|null $fieldSort
 * @property ParameterSortExpression|null $parameterSort
 * @property UserJobsFirst|null $userJobsFirst
 */
class SearchSortExpression extends Shape
{
    /**
     * @param array{
     *     fieldSort?: FieldSortExpression|null,
     *     parameterSort?: ParameterSortExpression|null,
     *     userJobsFirst?: UserJobsFirst|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
