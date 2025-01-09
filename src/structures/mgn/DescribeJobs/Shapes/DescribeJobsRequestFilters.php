<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fromDate
 * @property list<string> $jobIDs
 * @property string $toDate
 */
class DescribeJobsRequestFilters extends Shape
{
    /**
     * @param array{
     *     fromDate?: string,
     *     jobIDs?: list<string>,
     *     toDate?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
