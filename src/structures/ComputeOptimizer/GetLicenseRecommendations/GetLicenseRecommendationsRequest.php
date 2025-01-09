<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLicenseRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $resourceArns
 * @property string $nextToken
 * @property int<0, 1000> $maxResults
 * @property list<Shapes\LicenseRecommendationFilter> $filters
 * @property list<string> $accountIds
 */
class GetLicenseRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     resourceArns?: list<string>,
     *     nextToken?: string,
     *     maxResults?: int<0, 1000>,
     *     filters?: list<Shapes\LicenseRecommendationFilter>,
     *     accountIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
