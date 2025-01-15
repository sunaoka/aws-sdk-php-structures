<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLambdaFunctionRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $functionArns
 * @property list<string>|null $accountIds
 * @property list<Shapes\LambdaFunctionRecommendationFilter>|null $filters
 * @property string|null $nextToken
 * @property int<0, 1000>|null $maxResults
 */
class GetLambdaFunctionRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     functionArns?: list<string>|null,
     *     accountIds?: list<string>|null,
     *     filters?: list<Shapes\LambdaFunctionRecommendationFilter>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
