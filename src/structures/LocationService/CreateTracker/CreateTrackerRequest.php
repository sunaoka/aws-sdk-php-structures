<?php

namespace Sunaoka\Aws\Structures\LocationService\CreateTracker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrackerName
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property string|null $KmsKeyId
 * @property string|null $PricingPlanDataSource
 * @property string|null $Description
 * @property array<string, string>|null $Tags
 * @property 'TimeBased'|'DistanceBased'|'AccuracyBased'|null $PositionFiltering
 * @property bool|null $EventBridgeEnabled
 * @property bool|null $KmsKeyEnableGeospatialQueries
 */
class CreateTrackerRequest extends Request
{
    /**
     * @param array{
     *     TrackerName: string,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null,
     *     KmsKeyId?: string|null,
     *     PricingPlanDataSource?: string|null,
     *     Description?: string|null,
     *     Tags?: array<string, string>|null,
     *     PositionFiltering?: 'TimeBased'|'DistanceBased'|'AccuracyBased'|null,
     *     EventBridgeEnabled?: bool|null,
     *     KmsKeyEnableGeospatialQueries?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
