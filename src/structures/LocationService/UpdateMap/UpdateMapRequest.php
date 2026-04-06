<?php

namespace Sunaoka\Aws\Structures\LocationService\UpdateMap;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\MapConfigurationUpdate|null $ConfigurationUpdate
 * @property string|null $Description
 * @property string $MapName
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 */
class UpdateMapRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationUpdate?: Shapes\MapConfigurationUpdate|null,
     *     Description?: string|null,
     *     MapName: string,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
