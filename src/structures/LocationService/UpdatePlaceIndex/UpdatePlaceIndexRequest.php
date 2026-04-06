<?php

namespace Sunaoka\Aws\Structures\LocationService\UpdatePlaceIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DataSourceConfiguration|null $DataSourceConfiguration
 * @property string|null $Description
 * @property string $IndexName
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 */
class UpdatePlaceIndexRequest extends Request
{
    /**
     * @param array{
     *     DataSourceConfiguration?: Shapes\DataSourceConfiguration|null,
     *     Description?: string|null,
     *     IndexName: string,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
