<?php

namespace Sunaoka\Aws\Structures\LocationService\CreatePlaceIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexName
 * @property string $DataSource
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement' $PricingPlan
 * @property string $Description
 * @property Shapes\DataSourceConfiguration $DataSourceConfiguration
 * @property array<string, string> $Tags
 */
class CreatePlaceIndexRequest extends Request
{
    /**
     * @param array{
     *     IndexName: string,
     *     DataSource: string,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement',
     *     Description?: string,
     *     DataSourceConfiguration?: Shapes\DataSourceConfiguration,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
