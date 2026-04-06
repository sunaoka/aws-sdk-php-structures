<?php

namespace Sunaoka\Aws\Structures\LocationService\CreateTracker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property bool|null $EventBridgeEnabled
 * @property string|null $KmsKeyId
 * @property 'TimeBased'|'DistanceBased'|'AccuracyBased'|null $PositionFiltering
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property string|null $PricingPlanDataSource
 * @property array<string, string>|null $Tags
 * @property string $TrackerName
 */
class CreateTrackerRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     EventBridgeEnabled?: bool|null,
     *     KmsKeyId?: string|null,
     *     PositionFiltering?: 'TimeBased'|'DistanceBased'|'AccuracyBased'|null,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null,
     *     PricingPlanDataSource?: string|null,
     *     Tags?: array<string, string>|null,
     *     TrackerName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
