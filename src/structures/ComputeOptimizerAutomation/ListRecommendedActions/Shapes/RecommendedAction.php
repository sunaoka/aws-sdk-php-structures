<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListRecommendedActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $recommendedActionId
 * @property string|null $resourceArn
 * @property string|null $resourceId
 * @property string|null $accountId
 * @property string|null $region
 * @property 'EbsVolume'|null $resourceType
 * @property int|null $lookBackPeriodInDays
 * @property 'SnapshotAndDeleteUnattachedEbsVolume'|'UpgradeEbsVolumeType'|null $recommendedActionType
 * @property string|null $currentResourceSummary
 * @property ResourceDetails|null $currentResourceDetails
 * @property string|null $recommendedResourceSummary
 * @property ResourceDetails|null $recommendedResourceDetails
 * @property bool|null $restartNeeded
 * @property EstimatedMonthlySavings|null $estimatedMonthlySavings
 * @property list<Tag>|null $resourceTags
 */
class RecommendedAction extends Shape
{
    /**
     * @param array{
     *     recommendedActionId?: string|null,
     *     resourceArn?: string|null,
     *     resourceId?: string|null,
     *     accountId?: string|null,
     *     region?: string|null,
     *     resourceType?: 'EbsVolume'|null,
     *     lookBackPeriodInDays?: int|null,
     *     recommendedActionType?: 'SnapshotAndDeleteUnattachedEbsVolume'|'UpgradeEbsVolumeType'|null,
     *     currentResourceSummary?: string|null,
     *     currentResourceDetails?: ResourceDetails|null,
     *     recommendedResourceSummary?: string|null,
     *     recommendedResourceDetails?: ResourceDetails|null,
     *     restartNeeded?: bool|null,
     *     estimatedMonthlySavings?: EstimatedMonthlySavings|null,
     *     resourceTags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
