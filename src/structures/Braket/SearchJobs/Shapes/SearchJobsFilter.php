<?php

namespace Sunaoka\Aws\Structures\Braket\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'LT'|'LTE'|'EQUAL'|'GT'|'GTE'|'BETWEEN'|'CONTAINS' $operator
 * @property list<string> $values
 */
class SearchJobsFilter extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     operator: 'LT'|'LTE'|'EQUAL'|'GT'|'GTE'|'BETWEEN'|'CONTAINS',
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
