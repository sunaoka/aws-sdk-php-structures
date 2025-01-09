<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\DeleteSimulation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Simulation
 */
class DeleteSimulationRequest extends Request
{
    /**
     * @param array{Simulation: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
