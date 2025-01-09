<?php

namespace Sunaoka\Aws\Structures\LocationService\CreateMap;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MapName
 * @property Shapes\MapConfiguration $Configuration
 * @property 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement' $PricingPlan
 * @property string $Description
 * @property array<string, string> $Tags
 */
class CreateMapRequest extends Request
{
    /**
     * @param array{
     *     MapName: string,
     *     Configuration: Shapes\MapConfiguration,
     *     PricingPlan?: 'RequestBasedUsage'|'MobileAssetTracking'|'MobileAssetManagement',
     *     Description?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
