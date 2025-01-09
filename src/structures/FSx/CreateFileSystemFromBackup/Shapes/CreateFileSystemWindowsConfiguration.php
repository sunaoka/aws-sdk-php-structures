<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileSystemFromBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActiveDirectoryId
 * @property SelfManagedActiveDirectoryConfiguration $SelfManagedActiveDirectoryConfiguration
 * @property 'MULTI_AZ_1'|'SINGLE_AZ_1'|'SINGLE_AZ_2' $DeploymentType
 * @property string $PreferredSubnetId
 * @property int $ThroughputCapacity
 * @property string $WeeklyMaintenanceStartTime
 * @property string $DailyAutomaticBackupStartTime
 * @property int $AutomaticBackupRetentionDays
 * @property bool $CopyTagsToBackups
 * @property list<string> $Aliases
 * @property WindowsAuditLogCreateConfiguration $AuditLogConfiguration
 * @property DiskIopsConfiguration $DiskIopsConfiguration
 */
class CreateFileSystemWindowsConfiguration extends Shape
{
    /**
     * @param array{
     *     ActiveDirectoryId?: string,
     *     SelfManagedActiveDirectoryConfiguration?: SelfManagedActiveDirectoryConfiguration,
     *     DeploymentType?: 'MULTI_AZ_1'|'SINGLE_AZ_1'|'SINGLE_AZ_2',
     *     PreferredSubnetId?: string,
     *     ThroughputCapacity: int,
     *     WeeklyMaintenanceStartTime?: string,
     *     DailyAutomaticBackupStartTime?: string,
     *     AutomaticBackupRetentionDays?: int,
     *     CopyTagsToBackups?: bool,
     *     Aliases?: list<string>,
     *     AuditLogConfiguration?: WindowsAuditLogCreateConfiguration,
     *     DiskIopsConfiguration?: DiskIopsConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
