<?php

namespace Sunaoka\Aws\Structures\LocationService\CreateTracker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrackerName
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement' $PricingPlan
 * @property string $KmsKeyId
 * @property string $PricingPlanDataSource
 * @property string $Description
 * @property array<string, string> $Tags
 * @property 'TimeBased'|'DistanceBased'|'AccuracyBased' $PositionFiltering
 * @property bool $EventBridgeEnabled
 * @property bool $KmsKeyEnableGeospatialQueries
 */
class CreateTrackerRequest extends Request
{
    /**
     * @param array{
     *     TrackerName: string,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement',
     *     KmsKeyId?: string,
     *     PricingPlanDataSource?: string,
     *     Description?: string,
     *     Tags?: array<string, string>,
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
