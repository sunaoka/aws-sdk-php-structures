<?php

namespace Sunaoka\Aws\Structures\LocationService\CreateMap;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\MapConfiguration $Configuration
 * @property string|null $Description
 * @property string $MapName
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null $PricingPlan
 * @property array<string, string>|null $Tags
 */
class CreateMapRequest extends Request
{
    /**
     * @param array{
     *     Configuration: Shapes\MapConfiguration,
     *     Description?: string|null,
     *     MapName: string,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement'|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
