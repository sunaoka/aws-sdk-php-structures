<?php

namespace Sunaoka\Aws\Structures\drs\DescribeJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DescribeJobsRequestFilters $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class DescribeJobsRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\DescribeJobsRequestFilters,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
