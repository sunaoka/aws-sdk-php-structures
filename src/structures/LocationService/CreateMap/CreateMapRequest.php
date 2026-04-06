<?php

namespace Sunaoka\Aws\Structures\LocationService\CreateMap;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MapName
 * @property Shapes\MapConfiguration $Configuration
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property string|null $Description
 * @property array<string, string>|null $Tags
 */
class CreateMapRequest extends Request
{
    /**
     * @param array{
     *     MapName: string,
     *     Configuration: Shapes\MapConfiguration,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null,
     *     Description?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
