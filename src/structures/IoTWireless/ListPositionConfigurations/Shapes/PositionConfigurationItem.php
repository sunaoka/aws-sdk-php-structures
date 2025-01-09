<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListPositionConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceIdentifier
 * @property 'WirelessDevice'|'WirelessGateway' $ResourceType
 * @property PositionSolverDetails $Solvers
 * @property string $Destination
 */
class PositionConfigurationItem extends Shape
{
    /**
     * @param array{
     *     ResourceIdentifier?: string,
     *     ResourceType?: 'WirelessDevice'|'WirelessGateway',
     *     Solvers?: PositionSolverDetails,
     *     Destination?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
