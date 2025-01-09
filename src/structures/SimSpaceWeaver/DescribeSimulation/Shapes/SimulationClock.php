<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\DescribeSimulation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UNKNOWN'|'STARTING'|'STARTED'|'STOPPING'|'STOPPED' $Status
 * @property 'UNKNOWN'|'STARTED'|'STOPPED' $TargetStatus
 */
class SimulationClock extends Shape
{
    /**
     * @param array{
     *     Status?: 'UNKNOWN'|'STARTING'|'STARTED'|'STOPPING'|'STOPPED',
     *     TargetStatus?: 'UNKNOWN'|'STARTED'|'STOPPED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
