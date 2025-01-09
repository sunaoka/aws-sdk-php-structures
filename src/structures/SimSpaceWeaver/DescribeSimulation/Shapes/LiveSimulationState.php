<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\DescribeSimulation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SimulationClock> $Clocks
 * @property list<Domain> $Domains
 */
class LiveSimulationState extends Shape
{
    /**
     * @param array{
     *     Clocks?: list<SimulationClock>,
     *     Domains?: list<Domain>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
