<?php

namespace Sunaoka\Aws\Structures\LocationService\UpdatePlaceIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexName
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property string|null $Description
 * @property Shapes\DataSourceConfiguration|null $DataSourceConfiguration
 */
class UpdatePlaceIndexRequest extends Request
{
    /**
     * @param array{
     *     IndexName: string,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null,
     *     Description?: string|null,
     *     DataSourceConfiguration?: Shapes\DataSourceConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
