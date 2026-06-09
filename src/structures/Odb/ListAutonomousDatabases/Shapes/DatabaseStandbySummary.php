<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousDatabases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $availabilityDomain
 * @property int|null $lagTimeInSeconds
 * @property 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'MAINTENANCE_IN_PROGRESS'|'STOPPING'|'STOPPED'|'STARTING'|'UNAVAILABLE'|'RESTORE_IN_PROGRESS'|'RESTORE_FAILED'|'BACKUP_IN_PROGRESS'|'SCALE_IN_PROGRESS'|'AVAILABLE_NEEDS_ATTENTION'|'RESTARTING'|'RECREATING'|'ROLE_CHANGE_IN_PROGRESS'|'UPGRADING'|'INACCESSIBLE'|'STANDBY'|null $status
 * @property string|null $statusReason
 * @property string|null $maintenanceTargetComponent
 * @property \Aws\Api\DateTimeResult|null $timeDataGuardRoleChanged
 * @property \Aws\Api\DateTimeResult|null $timeDisasterRecoveryRoleChanged
 * @property \Aws\Api\DateTimeResult|null $timeMaintenanceBegin
 * @property \Aws\Api\DateTimeResult|null $timeMaintenanceEnd
 */
class DatabaseStandbySummary extends Shape
{
    /**
     * @param array{
     *     availabilityDomain?: string|null,
     *     lagTimeInSeconds?: int|null,
     *     status?: 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'MAINTENANCE_IN_PROGRESS'|'STOPPING'|'STOPPED'|'STARTING'|'UNAVAILABLE'|'RESTORE_IN_PROGRESS'|'RESTORE_FAILED'|'BACKUP_IN_PROGRESS'|'SCALE_IN_PROGRESS'|'AVAILABLE_NEEDS_ATTENTION'|'RESTARTING'|'RECREATING'|'ROLE_CHANGE_IN_PROGRESS'|'UPGRADING'|'INACCESSIBLE'|'STANDBY'|null,
     *     statusReason?: string|null,
     *     maintenanceTargetComponent?: string|null,
     *     timeDataGuardRoleChanged?: \Aws\Api\DateTimeResult|null,
     *     timeDisasterRecoveryRoleChanged?: \Aws\Api\DateTimeResult|null,
     *     timeMaintenanceBegin?: \Aws\Api\DateTimeResult|null,
     *     timeMaintenanceEnd?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
