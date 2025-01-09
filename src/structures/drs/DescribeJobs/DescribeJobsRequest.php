<?php

namespace Sunaoka\Aws\Structures\drs\DescribeJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DescribeJobsRequestFilters $filters
 * @property int<1, max> $maxResults
 * @property string $nextToken
 */
class DescribeJobsRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\DescribeJobsRequestFilters,
     *     maxResults?: int<1, max>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
