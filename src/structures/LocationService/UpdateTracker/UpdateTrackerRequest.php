<?php

namespace Sunaoka\Aws\Structures\LocationService\UpdateTracker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property bool|null $EventBridgeEnabled
 * @property 'TimeBased'|'DistanceBased'|'AccuracyBased'|null $PositionFiltering
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property string|null $PricingPlanDataSource
 * @property string $TrackerName
 */
class UpdateTrackerRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     EventBridgeEnabled?: bool|null,
     *     PositionFiltering?: 'TimeBased'|'DistanceBased'|'AccuracyBased'|null,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null,
     *     PricingPlanDataSource?: string|null,
     *     TrackerName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
