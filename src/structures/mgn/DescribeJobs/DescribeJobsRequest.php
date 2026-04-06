<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountID
 * @property Shapes\DescribeJobsRequestFilters|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class DescribeJobsRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string|null,
     *     filters?: Shapes\DescribeJobsRequestFilters|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
