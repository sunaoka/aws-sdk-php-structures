<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetAutoScalingGroupRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $accountIds
 * @property list<string>|null $autoScalingGroupArns
 * @property string|null $nextToken
 * @property int<0, 1000>|null $maxResults
 * @property list<Shapes\Filter>|null $filters
 * @property Shapes\RecommendationPreferences|null $recommendationPreferences
 */
class GetAutoScalingGroupRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     accountIds?: list<string>|null,
     *     autoScalingGroupArns?: list<string>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 1000>|null,
     *     filters?: list<Shapes\Filter>|null,
     *     recommendationPreferences?: Shapes\RecommendationPreferences|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
