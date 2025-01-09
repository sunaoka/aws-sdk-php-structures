<?php

namespace Sunaoka\Aws\Structures\Macie2\ListClassificationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQ'|'GT'|'GTE'|'LT'|'LTE'|'NE'|'CONTAINS'|'STARTS_WITH' $comparator
 * @property 'jobType'|'jobStatus'|'createdAt'|'name' $key
 * @property list<string> $values
 */
class ListJobsFilterTerm extends Shape
{
    /**
     * @param array{
     *     comparator?: 'EQ'|'GT'|'GTE'|'LT'|'LTE'|'NE'|'CONTAINS'|'STARTS_WITH',
     *     key?: 'jobType'|'jobStatus'|'createdAt'|'name',
     *     values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
