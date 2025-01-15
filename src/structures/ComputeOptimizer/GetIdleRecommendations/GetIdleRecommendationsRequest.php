<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetIdleRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $resourceArns
 * @property string|null $nextToken
 * @property int<0, 100>|null $maxResults
 * @property list<Shapes\IdleRecommendationFilter>|null $filters
 * @property list<string>|null $accountIds
 * @property Shapes\OrderBy|null $orderBy
 */
class GetIdleRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     resourceArns?: list<string>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 100>|null,
     *     filters?: list<Shapes\IdleRecommendationFilter>|null,
     *     accountIds?: list<string>|null,
     *     orderBy?: Shapes\OrderBy|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
