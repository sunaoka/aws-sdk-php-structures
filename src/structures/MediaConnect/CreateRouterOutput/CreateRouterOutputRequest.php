<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateRouterOutput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\RouterOutputConfiguration $Configuration
 * @property int $MaximumBitrate
 * @property 'REGIONAL'|'GLOBAL' $RoutingScope
 * @property 'OUTPUT_100'|'OUTPUT_50'|'OUTPUT_20' $Tier
 * @property string|null $RegionName
 * @property string|null $AvailabilityZone
 * @property Shapes\MaintenanceConfiguration|null $MaintenanceConfiguration
 * @property array<string, string>|null $Tags
 * @property string|null $ClientToken
 */
class CreateRouterOutputRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Configuration: Shapes\RouterOutputConfiguration,
     *     MaximumBitrate: int,
     *     RoutingScope: 'REGIONAL'|'GLOBAL',
     *     Tier: 'OUTPUT_100'|'OUTPUT_50'|'OUTPUT_20',
     *     RegionName?: string|null,
     *     AvailabilityZone?: string|null,
     *     MaintenanceConfiguration?: Shapes\MaintenanceConfiguration|null,
     *     Tags?: array<string, string>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
