<?php

namespace Sunaoka\Aws\Structures\LocationService\UpdateTracker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrackerName
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement' $PricingPlan
 * @property string $PricingPlanDataSource
 * @property string $Description
 * @property 'TimeBased'|'DistanceBased'|'AccuracyBased' $PositionFiltering
 * @property bool $EventBridgeEnabled
 * @property bool $KmsKeyEnableGeospatialQueries
 */
class UpdateTrackerRequest extends Request
{
    /**
     * @param array{
     *     TrackerName: string,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement',
     *     PricingPlanDataSource?: string,
     *     Description?: string,
     *     PositionFiltering?: 'TimeBased'|'DistanceBased'|'AccuracyBased',
     *     EventBridgeEnabled?: bool,
     *     KmsKeyEnableGeospatialQueries?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
