<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLicenseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $resourceArn
 * @property string|null $accountId
 * @property LicenseConfiguration|null $currentLicenseConfiguration
 * @property double|null $lookbackPeriodInDays
 * @property \Aws\Api\DateTimeResult|null $lastRefreshTimestamp
 * @property 'InsufficientMetrics'|'Optimized'|'NotOptimized'|null $finding
 * @property list<'InvalidCloudWatchApplicationInsightsSetup'|'CloudWatchApplicationInsightsError'|'LicenseOverprovisioned'|'Optimized'>|null $findingReasonCodes
 * @property list<LicenseRecommendationOption>|null $licenseRecommendationOptions
 * @property list<Tag>|null $tags
 */
class LicenseRecommendation extends Shape
{
    /**
     * @param array{
     *     resourceArn?: string|null,
     *     accountId?: string|null,
     *     currentLicenseConfiguration?: LicenseConfiguration|null,
     *     lookbackPeriodInDays?: double|null,
     *     lastRefreshTimestamp?: \Aws\Api\DateTimeResult|null,
     *     finding?: 'InsufficientMetrics'|'Optimized'|'NotOptimized'|null,
     *     findingReasonCodes?: list<'InvalidCloudWatchApplicationInsightsSetup'|'CloudWatchApplicationInsightsError'|'LicenseOverprovisioned'|'Optimized'>|null,
     *     licenseRecommendationOptions?: list<LicenseRecommendationOption>|null,
     *     tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
