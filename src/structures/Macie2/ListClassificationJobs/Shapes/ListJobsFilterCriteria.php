<?php

namespace Sunaoka\Aws\Structures\Macie2\ListClassificationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ListJobsFilterTerm> $excludes
 * @property list<ListJobsFilterTerm> $includes
 */
class ListJobsFilterCriteria extends Shape
{
    /**
     * @param array{
     *     excludes?: list<ListJobsFilterTerm>,
     *     includes?: list<ListJobsFilterTerm>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
