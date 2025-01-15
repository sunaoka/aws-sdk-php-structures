<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEC2InstanceRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $instanceArns
 * @property string|null $nextToken
 * @property int<0, 1000>|null $maxResults
 * @property list<Shapes\Filter>|null $filters
 * @property list<string>|null $accountIds
 * @property Shapes\RecommendationPreferences|null $recommendationPreferences
 */
class GetEC2InstanceRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     instanceArns?: list<string>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 1000>|null,
     *     filters?: list<Shapes\Filter>|null,
     *     accountIds?: list<string>|null,
     *     recommendationPreferences?: Shapes\RecommendationPreferences|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
