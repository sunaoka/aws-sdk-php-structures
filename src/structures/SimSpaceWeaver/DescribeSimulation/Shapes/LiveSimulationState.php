<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\DescribeSimulation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SimulationClock>|null $Clocks
 * @property list<Domain>|null $Domains
 */
class LiveSimulationState extends Shape
{
    /**
     * @param array{
     *     Clocks?: list<SimulationClock>|null,
     *     Domains?: list<Domain>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
