<?php

namespace Sunaoka\Aws\Structures\LocationService\UpdateMap;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MapName
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement' $PricingPlan
 * @property string $Description
 * @property Shapes\MapConfigurationUpdate $ConfigurationUpdate
 */
class UpdateMapRequest extends Request
{
    /**
     * @param array{
     *     MapName: string,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement',
     *     Description?: string,
     *     ConfigurationUpdate?: Shapes\MapConfigurationUpdate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
