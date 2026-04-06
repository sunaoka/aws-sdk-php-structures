<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WeeklyMaintenanceStartTime
 * @property string|null $DailyAutomaticBackupStartTime
 * @property int<0, 90>|null $AutomaticBackupRetentionDays
 * @property int<8, 100000>|null $ThroughputCapacity
 * @property SelfManagedActiveDirectoryConfigurationUpdates|null $SelfManagedActiveDirectoryConfiguration
 * @property WindowsAuditLogCreateConfiguration|null $AuditLogConfiguration
 * @property DiskIopsConfiguration|null $DiskIopsConfiguration
 */
class UpdateFileSystemWindowsConfiguration extends Shape
{
    /**
     * @param array{
     *     WeeklyMaintenanceStartTime?: string|null,
     *     DailyAutomaticBackupStartTime?: string|null,
     *     AutomaticBackupRetentionDays?: int<0, 90>|null,
     *     ThroughputCapacity?: int<8, 100000>|null,
     *     SelfManagedActiveDirectoryConfiguration?: SelfManagedActiveDirectoryConfigurationUpdates|null,
     *     AuditLogConfiguration?: WindowsAuditLogCreateConfiguration|null,
     *     DiskIopsConfiguration?: DiskIopsConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
