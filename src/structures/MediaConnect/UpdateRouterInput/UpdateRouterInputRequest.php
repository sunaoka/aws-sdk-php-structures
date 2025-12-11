<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateRouterInput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string|null $Name
 * @property Shapes\RouterInputConfiguration|null $Configuration
 * @property int|null $MaximumBitrate
 * @property 'REGIONAL'|'GLOBAL'|null $RoutingScope
 * @property 'INPUT_100'|'INPUT_50'|'INPUT_20'|null $Tier
 * @property Shapes\RouterInputTransitEncryption|null $TransitEncryption
 * @property Shapes\MaintenanceConfiguration|null $MaintenanceConfiguration
 */
class UpdateRouterInputRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     Name?: string|null,
     *     Configuration?: Shapes\RouterInputConfiguration|null,
     *     MaximumBitrate?: int|null,
     *     RoutingScope?: 'REGIONAL'|'GLOBAL'|null,
     *     Tier?: 'INPUT_100'|'INPUT_50'|'INPUT_20'|null,
     *     TransitEncryption?: Shapes\RouterInputTransitEncryption|null,
     *     MaintenanceConfiguration?: Shapes\MaintenanceConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
