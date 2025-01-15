<?php

namespace Sunaoka\Aws\Structures\IoTWireless\PutPositionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceIdentifier
 * @property 'WirelessDevice'|'WirelessGateway' $ResourceType
 * @property Shapes\PositionSolverConfigurations|null $Solvers
 * @property string|null $Destination
 */
class PutPositionConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ResourceIdentifier: string,
     *     ResourceType: 'WirelessDevice'|'WirelessGateway',
     *     Solvers?: Shapes\PositionSolverConfigurations|null,
     *     Destination?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
