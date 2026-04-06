<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $jobIDs
 * @property string|null $fromDate
 * @property string|null $toDate
 */
class DescribeJobsRequestFilters extends Shape
{
    /**
     * @param array{
     *     jobIDs?: list<string>|null,
     *     fromDate?: string|null,
     *     toDate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
