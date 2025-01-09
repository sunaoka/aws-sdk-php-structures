<?php

namespace Sunaoka\Aws\Structures\Ec2\GetVpnTunnelReplacementStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PendingMaintenance
 * @property \Aws\Api\DateTimeResult $MaintenanceAutoAppliedAfter
 * @property \Aws\Api\DateTimeResult $LastMaintenanceApplied
 */
class MaintenanceDetails extends Shape
{
    /**
     * @param array{
     *     PendingMaintenance?: string,
     *     MaintenanceAutoAppliedAfter?: \Aws\Api\DateTimeResult,
     *     LastMaintenanceApplied?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
