<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\DescribeRecommendationExportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $jobIds
 * @property list<Shapes\JobFilter> $filters
 * @property string $nextToken
 * @property int<0, 1000> $maxResults
 */
class DescribeRecommendationExportJobsRequest extends Request
{
    /**
     * @param array{
     *     jobIds?: list<string>,
     *     filters?: list<Shapes\JobFilter>,
     *     nextToken?: string,
     *     maxResults?: int<0, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
