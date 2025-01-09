<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetAutoScalingGroupRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $accountIds
 * @property list<string> $autoScalingGroupArns
 * @property string $nextToken
 * @property int $maxResults
 * @property list<Shapes\Filter> $filters
 * @property Shapes\RecommendationPreferences $recommendationPreferences
 */
class GetAutoScalingGroupRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     accountIds?: list<string>,
     *     autoScalingGroupArns?: list<string>,
     *     nextToken?: string,
     *     maxResults?: int,
     *     filters?: list<Shapes\Filter>,
     *     recommendationPreferences?: Shapes\RecommendationPreferences
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
