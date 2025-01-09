<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $resourceArns
 * @property string $nextToken
 * @property int $maxResults
 * @property list<Shapes\RDSDBRecommendationFilter> $filters
 * @property list<string> $accountIds
 * @property Shapes\RecommendationPreferences $recommendationPreferences
 */
class GetRDSDatabaseRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     resourceArns?: list<string>,
     *     nextToken?: string,
     *     maxResults?: int,
     *     filters?: list<Shapes\RDSDBRecommendationFilter>,
     *     accountIds?: list<string>,
     *     recommendationPreferences?: Shapes\RecommendationPreferences
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
