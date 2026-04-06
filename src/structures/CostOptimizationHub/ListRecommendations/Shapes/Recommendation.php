<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $recommendationId
 * @property string|null $accountId
 * @property string|null $region
 * @property string|null $resourceId
 * @property string|null $resourceArn
 * @property string|null $currentResourceType
 * @property string|null $recommendedResourceType
 * @property double|null $estimatedMonthlySavings
 * @property double|null $estimatedSavingsPercentage
 * @property double|null $estimatedMonthlyCost
 * @property string|null $currencyCode
 * @property string|null $implementationEffort
 * @property bool|null $restartNeeded
 * @property string|null $actionType
 * @property bool|null $rollbackPossible
 * @property string|null $currentResourceSummary
 * @property string|null $recommendedResourceSummary
 * @property \Aws\Api\DateTimeResult|null $lastRefreshTimestamp
 * @property int|null $recommendationLookbackPeriodInDays
 * @property 'ComputeOptimizer'|'CostExplorer'|null $source
 * @property list<Tag>|null $tags
 */
class Recommendation extends Shape
{
    /**
     * @param array{
     *     recommendationId?: string|null,
     *     accountId?: string|null,
     *     region?: string|null,
     *     resourceId?: string|null,
     *     resourceArn?: string|null,
     *     currentResourceType?: string|null,
     *     recommendedResourceType?: string|null,
     *     estimatedMonthlySavings?: double|null,
     *     estimatedSavingsPercentage?: double|null,
     *     estimatedMonthlyCost?: double|null,
     *     currencyCode?: string|null,
     *     implementationEffort?: string|null,
     *     restartNeeded?: bool|null,
     *     actionType?: string|null,
     *     rollbackPossible?: bool|null,
     *     currentResourceSummary?: string|null,
     *     recommendedResourceSummary?: string|null,
     *     lastRefreshTimestamp?: \Aws\Api\DateTimeResult|null,
     *     recommendationLookbackPeriodInDays?: int|null,
     *     source?: 'ComputeOptimizer'|'CostExplorer'|null,
     *     tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
