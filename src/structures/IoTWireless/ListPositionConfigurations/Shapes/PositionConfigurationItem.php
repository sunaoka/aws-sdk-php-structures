<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListPositionConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceIdentifier
 * @property 'WirelessDevice'|'WirelessGateway'|null $ResourceType
 * @property PositionSolverDetails|null $Solvers
 * @property string|null $Destination
 */
class PositionConfigurationItem extends Shape
{
    /**
     * @param array{
     *     ResourceIdentifier?: string|null,
     *     ResourceType?: 'WirelessDevice'|'WirelessGateway'|null,
     *     Solvers?: PositionSolverDetails|null,
     *     Destination?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
