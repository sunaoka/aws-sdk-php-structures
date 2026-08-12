<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateRouterOutput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string|null $Name
 * @property Shapes\RouterOutputConfiguration|null $Configuration
 * @property int|null $MaximumBitrate
 * @property 'REGIONAL'|'GLOBAL'|null $RoutingScope
 * @property 'OUTPUT_100'|'OUTPUT_50'|'OUTPUT_20'|null $Tier
 * @property Shapes\MaintenanceConfiguration|null $MaintenanceConfiguration
 * @property Shapes\FabricConfiguration|null $FabricConfiguration
 */
class UpdateRouterOutputRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     Name?: string|null,
     *     Configuration?: Shapes\RouterOutputConfiguration|null,
     *     MaximumBitrate?: int|null,
     *     RoutingScope?: 'REGIONAL'|'GLOBAL'|null,
     *     Tier?: 'OUTPUT_100'|'OUTPUT_50'|'OUTPUT_20'|null,
     *     MaintenanceConfiguration?: Shapes\MaintenanceConfiguration|null,
     *     FabricConfiguration?: Shapes\FabricConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
