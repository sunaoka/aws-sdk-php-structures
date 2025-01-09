<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetIdleRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $resourceArns
 * @property string $nextToken
 * @property int<0, 100> $maxResults
 * @property list<Shapes\IdleRecommendationFilter> $filters
 * @property list<string> $accountIds
 * @property Shapes\OrderBy $orderBy
 */
class GetIdleRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     resourceArns?: list<string>,
     *     nextToken?: string,
     *     maxResults?: int<0, 100>,
     *     filters?: list<Shapes\IdleRecommendationFilter>,
     *     accountIds?: list<string>,
     *     orderBy?: Shapes\OrderBy
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
