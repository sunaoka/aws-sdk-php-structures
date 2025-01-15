<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\DescribeSimulation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UNKNOWN'|'STARTING'|'STARTED'|'STOPPING'|'STOPPED'|null $Status
 * @property 'UNKNOWN'|'STARTED'|'STOPPED'|null $TargetStatus
 */
class SimulationClock extends Shape
{
    /**
     * @param array{
     *     Status?: 'UNKNOWN'|'STARTING'|'STARTED'|'STOPPING'|'STOPPED'|null,
     *     TargetStatus?: 'UNKNOWN'|'STARTED'|'STOPPED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
