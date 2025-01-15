<?php

namespace Sunaoka\Aws\Structures\drs\DescribeJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DescribeJobsRequestFilters|null $filters
 * @property int<1, max>|null $maxResults
 * @property string|null $nextToken
 */
class DescribeJobsRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\DescribeJobsRequestFilters|null,
     *     maxResults?: int<1, max>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
