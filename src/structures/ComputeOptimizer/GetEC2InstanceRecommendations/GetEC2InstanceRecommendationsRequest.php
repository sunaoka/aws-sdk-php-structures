<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEC2InstanceRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $instanceArns
 * @property string $nextToken
 * @property int<0, 1000> $maxResults
 * @property list<Shapes\Filter> $filters
 * @property list<string> $accountIds
 * @property Shapes\RecommendationPreferences $recommendationPreferences
 */
class GetEC2InstanceRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     instanceArns?: list<string>,
     *     nextToken?: string,
     *     maxResults?: int<0, 1000>,
     *     filters?: list<Shapes\Filter>,
     *     accountIds?: list<string>,
     *     recommendationPreferences?: Shapes\RecommendationPreferences
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
