<?php

namespace Sunaoka\Aws\Structures\LocationService\CreateGeofenceCollection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionName
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property string|null $PricingPlanDataSource
 * @property string|null $Description
 * @property array<string, string>|null $Tags
 * @property string|null $KmsKeyId
 */
class CreateGeofenceCollectionRequest extends Request
{
    /**
     * @param array{
     *     CollectionName: string,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null,
     *     PricingPlanDataSource?: string|null,
     *     Description?: string|null,
     *     Tags?: array<string, string>|null,
     *     KmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
