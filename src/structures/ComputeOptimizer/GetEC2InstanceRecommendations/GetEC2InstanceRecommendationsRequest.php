<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEC2InstanceRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $instanceArns
 * @property string $nextToken
 * @property int $maxResults
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
     *     maxResults?: int,
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
