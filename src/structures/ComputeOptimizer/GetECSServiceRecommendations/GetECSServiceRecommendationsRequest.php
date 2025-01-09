<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $serviceArns
 * @property string $nextToken
 * @property int<0, 1000> $maxResults
 * @property list<Shapes\ECSServiceRecommendationFilter> $filters
 * @property list<string> $accountIds
 */
class GetECSServiceRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     serviceArns?: list<string>,
     *     nextToken?: string,
     *     maxResults?: int<0, 1000>,
     *     filters?: list<Shapes\ECSServiceRecommendationFilter>,
     *     accountIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
