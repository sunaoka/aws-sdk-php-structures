<?php

namespace Sunaoka\Aws\Structures\Ec2\GetVpnTunnelReplacementStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PendingMaintenance
 * @property \Aws\Api\DateTimeResult|null $MaintenanceAutoAppliedAfter
 * @property \Aws\Api\DateTimeResult|null $LastMaintenanceApplied
 */
class MaintenanceDetails extends Shape
{
    /**
     * @param array{
     *     PendingMaintenance?: string|null,
     *     MaintenanceAutoAppliedAfter?: \Aws\Api\DateTimeResult|null,
     *     LastMaintenanceApplied?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
