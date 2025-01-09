<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLicenseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceArn
 * @property string $accountId
 * @property LicenseConfiguration $currentLicenseConfiguration
 * @property double $lookbackPeriodInDays
 * @property \Aws\Api\DateTimeResult $lastRefreshTimestamp
 * @property 'InsufficientMetrics'|'Optimized'|'NotOptimized' $finding
 * @property list<'InvalidCloudWatchApplicationInsightsSetup'|'CloudWatchApplicationInsightsError'|'LicenseOverprovisioned'|'Optimized'> $findingReasonCodes
 * @property list<LicenseRecommendationOption> $licenseRecommendationOptions
 * @property list<Tag> $tags
 */
class LicenseRecommendation extends Shape
{
    /**
     * @param array{
     *     resourceArn?: string,
     *     accountId?: string,
     *     currentLicenseConfiguration?: LicenseConfiguration,
     *     lookbackPeriodInDays?: double,
     *     lastRefreshTimestamp?: \Aws\Api\DateTimeResult,
     *     finding?: 'InsufficientMetrics'|'Optimized'|'NotOptimized',
     *     findingReasonCodes?: list<'InvalidCloudWatchApplicationInsightsSetup'|'CloudWatchApplicationInsightsError'|'LicenseOverprovisioned'|'Optimized'>,
     *     licenseRecommendationOptions?: list<LicenseRecommendationOption>,
     *     tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
