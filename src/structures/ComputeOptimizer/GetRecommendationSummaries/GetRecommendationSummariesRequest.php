<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRecommendationSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $accountIds
 * @property string $nextToken
 * @property int<0, 1000> $maxResults
 */
class GetRecommendationSummariesRequest extends Request
{
    /**
     * @param array{
     *     accountIds?: list<string>,
     *     nextToken?: string,
     *     maxResults?: int<0, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
