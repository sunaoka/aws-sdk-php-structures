<?php

namespace Sunaoka\Aws\Structures\Braket\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property list<string> $values
 * @property 'LT'|'LTE'|'EQUAL'|'GT'|'GTE'|'BETWEEN'|'CONTAINS' $operator
 */
class SearchJobsFilter extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     values: list<string>,
     *     operator: 'LT'|'LTE'|'EQUAL'|'GT'|'GTE'|'BETWEEN'|'CONTAINS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
