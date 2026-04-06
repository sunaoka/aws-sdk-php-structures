<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLicenseRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $resourceArns
 * @property string|null $nextToken
 * @property int<0, 1000>|null $maxResults
 * @property list<Shapes\LicenseRecommendationFilter>|null $filters
 * @property list<string>|null $accountIds
 */
class GetLicenseRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     resourceArns?: list<string>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 1000>|null,
     *     filters?: list<Shapes\LicenseRecommendationFilter>|null,
     *     accountIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
