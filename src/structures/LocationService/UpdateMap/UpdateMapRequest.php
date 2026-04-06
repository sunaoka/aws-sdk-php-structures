<?php

namespace Sunaoka\Aws\Structures\LocationService\UpdateMap;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MapName
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property string|null $Description
 * @property Shapes\MapConfigurationUpdate|null $ConfigurationUpdate
 */
class UpdateMapRequest extends Request
{
    /**
     * @param array{
     *     MapName: string,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null,
     *     Description?: string|null,
     *     ConfigurationUpdate?: Shapes\MapConfigurationUpdate|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
