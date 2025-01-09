<?php

namespace Sunaoka\Aws\Structures\LocationService\CreateGeofenceCollection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionName
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement' $PricingPlan
 * @property string $PricingPlanDataSource
 * @property string $Description
 * @property array<string, string> $Tags
 * @property string $KmsKeyId
 */
class CreateGeofenceCollectionRequest extends Request
{
    /**
     * @param array{
     *     CollectionName: string,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement',
     *     PricingPlanDataSource?: string,
     *     Description?: string,
     *     Tags?: array<string, string>,
     *     KmsKeyId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
