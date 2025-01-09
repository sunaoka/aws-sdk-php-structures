<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountID
 * @property Shapes\DescribeJobsRequestFilters $filters
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 */
class DescribeJobsRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string,
     *     filters?: Shapes\DescribeJobsRequestFilters,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
