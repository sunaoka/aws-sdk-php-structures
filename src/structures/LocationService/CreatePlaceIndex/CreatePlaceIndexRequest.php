<?php

namespace Sunaoka\Aws\Structures\LocationService\CreatePlaceIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexName
 * @property string $DataSource
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property string|null $Description
 * @property Shapes\DataSourceConfiguration|null $DataSourceConfiguration
 * @property array<string, string>|null $Tags
 */
class CreatePlaceIndexRequest extends Request
{
    /**
     * @param array{
     *     IndexName: string,
     *     DataSource: string,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null,
     *     Description?: string|null,
     *     DataSourceConfiguration?: Shapes\DataSourceConfiguration|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
