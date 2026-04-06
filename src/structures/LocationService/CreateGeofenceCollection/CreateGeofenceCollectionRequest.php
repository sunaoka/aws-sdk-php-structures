<?php

namespace Sunaoka\Aws\Structures\LocationService\CreateGeofenceCollection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionName
 * @property string|null $Description
 * @property string|null $KmsKeyId
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property string|null $PricingPlanDataSource
 * @property array<string, string>|null $Tags
 */
class CreateGeofenceCollectionRequest extends Request
{
    /**
     * @param array{
     *     CollectionName: string,
     *     Description?: string|null,
     *     KmsKeyId?: string|null,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null,
     *     PricingPlanDataSource?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
