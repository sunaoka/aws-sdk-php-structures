<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $recommendationId
 * @property string $accountId
 * @property string $region
 * @property string $resourceId
 * @property string $resourceArn
 * @property string $currentResourceType
 * @property string $recommendedResourceType
 * @property double $estimatedMonthlySavings
 * @property double $estimatedSavingsPercentage
 * @property double $estimatedMonthlyCost
 * @property string $currencyCode
 * @property string $implementationEffort
 * @property bool $restartNeeded
 * @property string $actionType
 * @property bool $rollbackPossible
 * @property string $currentResourceSummary
 * @property string $recommendedResourceSummary
 * @property \Aws\Api\DateTimeResult $lastRefreshTimestamp
 * @property int $recommendationLookbackPeriodInDays
 * @property 'ComputeOptimizer'|'CostExplorer' $source
 * @property list<Tag> $tags
 */
class Recommendation extends Shape
{
    /**
     * @param array{
     *     recommendationId?: string,
     *     accountId?: string,
     *     region?: string,
     *     resourceId?: string,
     *     resourceArn?: string,
     *     currentResourceType?: string,
     *     recommendedResourceType?: string,
     *     estimatedMonthlySavings?: double,
     *     estimatedSavingsPercentage?: double,
     *     estimatedMonthlyCost?: double,
     *     currencyCode?: string,
     *     implementationEffort?: string,
     *     restartNeeded?: bool,
     *     actionType?: string,
     *     rollbackPossible?: bool,
     *     currentResourceSummary?: string,
     *     recommendedResourceSummary?: string,
     *     lastRefreshTimestamp?: \Aws\Api\DateTimeResult,
     *     recommendationLookbackPeriodInDays?: int,
     *     source?: 'ComputeOptimizer'|'CostExplorer',
     *     tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
