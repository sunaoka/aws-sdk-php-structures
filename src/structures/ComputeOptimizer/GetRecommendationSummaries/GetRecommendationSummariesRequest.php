<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRecommendationSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $accountIds
 * @property string|null $nextToken
 * @property int<0, 1000>|null $maxResults
 */
class GetRecommendationSummariesRequest extends Request
{
    /**
     * @param array{
     *     accountIds?: list<string>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
