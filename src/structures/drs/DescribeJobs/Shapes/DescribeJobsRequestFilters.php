<?php

namespace Sunaoka\Aws\Structures\drs\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $fromDate
 * @property list<string>|null $jobIDs
 * @property string|null $toDate
 */
class DescribeJobsRequestFilters extends Shape
{
    /**
     * @param array{
     *     fromDate?: string|null,
     *     jobIDs?: list<string>|null,
     *     toDate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
