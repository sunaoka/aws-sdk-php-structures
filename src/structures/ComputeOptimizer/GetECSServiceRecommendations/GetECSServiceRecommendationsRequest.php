<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $serviceArns
 * @property string|null $nextToken
 * @property int<0, 1000>|null $maxResults
 * @property list<Shapes\ECSServiceRecommendationFilter>|null $filters
 * @property list<string>|null $accountIds
 */
class GetECSServiceRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     serviceArns?: list<string>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 1000>|null,
     *     filters?: list<Shapes\ECSServiceRecommendationFilter>|null,
     *     accountIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
