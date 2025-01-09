<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WeeklyMaintenanceStartTime
 * @property string $DailyAutomaticBackupStartTime
 * @property int $AutomaticBackupRetentionDays
 * @property int $ThroughputCapacity
 * @property SelfManagedActiveDirectoryConfigurationUpdates $SelfManagedActiveDirectoryConfiguration
 * @property WindowsAuditLogCreateConfiguration $AuditLogConfiguration
 * @property DiskIopsConfiguration $DiskIopsConfiguration
 */
class UpdateFileSystemWindowsConfiguration extends Shape
{
    /**
     * @param array{
     *     WeeklyMaintenanceStartTime?: string,
     *     DailyAutomaticBackupStartTime?: string,
     *     AutomaticBackupRetentionDays?: int,
     *     ThroughputCapacity?: int,
     *     SelfManagedActiveDirectoryConfiguration?: SelfManagedActiveDirectoryConfigurationUpdates,
     *     AuditLogConfiguration?: WindowsAuditLogCreateConfiguration,
     *     DiskIopsConfiguration?: DiskIopsConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
