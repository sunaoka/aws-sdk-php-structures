<?php

namespace Sunaoka\Aws\Structures\LocationService\UpdateGeofenceCollection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionName
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement' $PricingPlan
 * @property string $PricingPlanDataSource
 * @property string $Description
 */
class UpdateGeofenceCollectionRequest extends Request
{
    /**
     * @param array{
     *     CollectionName: string,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement',
     *     PricingPlanDataSource?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
