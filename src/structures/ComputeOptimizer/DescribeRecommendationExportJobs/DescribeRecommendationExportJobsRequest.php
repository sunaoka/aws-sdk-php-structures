<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\DescribeRecommendationExportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $jobIds
 * @property list<Shapes\JobFilter>|null $filters
 * @property string|null $nextToken
 * @property int<0, 1000>|null $maxResults
 */
class DescribeRecommendationExportJobsRequest extends Request
{
    /**
     * @param array{
     *     jobIds?: list<string>|null,
     *     filters?: list<Shapes\JobFilter>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
