<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\StopSimulation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Simulation
 */
class StopSimulationRequest extends Request
{
    /**
     * @param array{Simulation: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
