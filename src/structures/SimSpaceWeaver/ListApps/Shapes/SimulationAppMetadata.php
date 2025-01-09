<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\ListApps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Domain
 * @property string $Name
 * @property string $Simulation
 * @property 'STARTING'|'STARTED'|'STOPPING'|'STOPPED'|'ERROR'|'UNKNOWN' $Status
 * @property 'UNKNOWN'|'STARTED'|'STOPPED' $TargetStatus
 */
class SimulationAppMetadata extends Shape
{
    /**
     * @param array{
     *     Domain?: string,
     *     Name?: string,
     *     Simulation?: string,
     *     Status?: 'STARTING'|'STARTED'|'STOPPING'|'STOPPED'|'ERROR'|'UNKNOWN',
     *     TargetStatus?: 'UNKNOWN'|'STARTED'|'STOPPED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
