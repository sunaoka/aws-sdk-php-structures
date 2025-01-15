<?php

namespace Sunaoka\Aws\Structures\Macie2\ListClassificationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ListJobsFilterTerm>|null $excludes
 * @property list<ListJobsFilterTerm>|null $includes
 */
class ListJobsFilterCriteria extends Shape
{
    /**
     * @param array{
     *     excludes?: list<ListJobsFilterTerm>|null,
     *     includes?: list<ListJobsFilterTerm>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
