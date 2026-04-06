<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $resourceArns
 * @property string|null $nextToken
 * @property int<0, 1000>|null $maxResults
 * @property list<Shapes\RDSDBRecommendationFilter>|null $filters
 * @property list<string>|null $accountIds
 * @property Shapes\RecommendationPreferences|null $recommendationPreferences
 */
class GetRDSDatabaseRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     resourceArns?: list<string>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 1000>|null,
     *     filters?: list<Shapes\RDSDBRecommendationFilter>|null,
     *     accountIds?: list<string>|null,
     *     recommendationPreferences?: Shapes\RecommendationPreferences|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
