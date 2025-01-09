<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\DescribeSimulation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Simulation
 */
class DescribeSimulationRequest extends Request
{
    /**
     * @param array{Simulation: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
