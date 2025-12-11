<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateRouterInput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\RouterInputConfiguration $Configuration
 * @property int $MaximumBitrate
 * @property 'REGIONAL'|'GLOBAL' $RoutingScope
 * @property 'INPUT_100'|'INPUT_50'|'INPUT_20' $Tier
 * @property string|null $RegionName
 * @property string|null $AvailabilityZone
 * @property Shapes\RouterInputTransitEncryption|null $TransitEncryption
 * @property Shapes\MaintenanceConfiguration|null $MaintenanceConfiguration
 * @property array<string, string>|null $Tags
 * @property string|null $ClientToken
 */
class CreateRouterInputRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Configuration: Shapes\RouterInputConfiguration,
     *     MaximumBitrate: int,
     *     RoutingScope: 'REGIONAL'|'GLOBAL',
     *     Tier: 'INPUT_100'|'INPUT_50'|'INPUT_20',
     *     RegionName?: string|null,
     *     AvailabilityZone?: string|null,
     *     TransitEncryption?: Shapes\RouterInputTransitEncryption|null,
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
