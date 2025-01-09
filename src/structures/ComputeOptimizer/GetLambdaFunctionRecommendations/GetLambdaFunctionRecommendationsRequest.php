<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLambdaFunctionRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $functionArns
 * @property list<string> $accountIds
 * @property list<Shapes\LambdaFunctionRecommendationFilter> $filters
 * @property string $nextToken
 * @property int<0, 1000> $maxResults
 */
class GetLambdaFunctionRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     functionArns?: list<string>,
     *     accountIds?: list<string>,
     *     filters?: list<Shapes\LambdaFunctionRecommendationFilter>,
     *     nextToken?: string,
     *     maxResults?: int<0, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
