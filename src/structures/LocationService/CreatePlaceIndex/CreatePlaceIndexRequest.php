<?php

namespace Sunaoka\Aws\Structures\LocationService\CreatePlaceIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSource
 * @property Shapes\DataSourceConfiguration|null $DataSourceConfiguration
 * @property string|null $Description
 * @property string $IndexName
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property array<string, string>|null $Tags
 */
class CreatePlaceIndexRequest extends Request
{
    /**
     * @param array{
     *     DataSource: string,
     *     DataSourceConfiguration?: Shapes\DataSourceConfiguration|null,
     *     Description?: string|null,
     *     IndexName: string,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
