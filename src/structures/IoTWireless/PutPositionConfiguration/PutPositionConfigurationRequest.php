<?php

namespace Sunaoka\Aws\Structures\IoTWireless\PutPositionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceIdentifier
 * @property 'WirelessDevice'|'WirelessGateway' $ResourceType
 * @property Shapes\PositionSolverConfigurations $Solvers
 * @property string $Destination
 */
class PutPositionConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ResourceIdentifier: string,
     *     ResourceType: 'WirelessDevice'|'WirelessGateway',
     *     Solvers?: Shapes\PositionSolverConfigurations,
     *     Destination?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
