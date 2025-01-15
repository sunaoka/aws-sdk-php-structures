<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\ListApps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Domain
 * @property string|null $Name
 * @property string|null $Simulation
 * @property 'STARTING'|'STARTED'|'STOPPING'|'STOPPED'|'ERROR'|'UNKNOWN'|null $Status
 * @property 'UNKNOWN'|'STARTED'|'STOPPED'|null $TargetStatus
 */
class SimulationAppMetadata extends Shape
{
    /**
     * @param array{
     *     Domain?: string|null,
     *     Name?: string|null,
     *     Simulation?: string|null,
     *     Status?: 'STARTING'|'STARTED'|'STOPPING'|'STOPPED'|'ERROR'|'UNKNOWN'|null,
     *     TargetStatus?: 'UNKNOWN'|'STARTED'|'STOPPED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
