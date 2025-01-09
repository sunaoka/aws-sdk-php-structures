<?php

namespace Sunaoka\Aws\Structures\LocationService\UpdatePlaceIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexName
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement' $PricingPlan
 * @property string $Description
 * @property Shapes\DataSourceConfiguration $DataSourceConfiguration
 */
class UpdatePlaceIndexRequest extends Request
{
    /**
     * @param array{
     *     IndexName: string,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement',
     *     Description?: string,
     *     DataSourceConfiguration?: Shapes\DataSourceConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
