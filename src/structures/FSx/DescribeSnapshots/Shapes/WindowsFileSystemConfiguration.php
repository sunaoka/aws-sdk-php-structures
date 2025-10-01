<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ActiveDirectoryId
 * @property SelfManagedActiveDirectoryAttributes|null $SelfManagedActiveDirectoryConfiguration
 * @property 'MULTI_AZ_1'|'SINGLE_AZ_1'|'SINGLE_AZ_2'|null $DeploymentType
 * @property string|null $RemoteAdministrationEndpoint
 * @property string|null $PreferredSubnetId
 * @property string|null $PreferredFileServerIp
 * @property int<8, 100000>|null $ThroughputCapacity
 * @property list<'PATCHING'|'BACKING_UP'>|null $MaintenanceOperationsInProgress
 * @property string|null $WeeklyMaintenanceStartTime
 * @property string|null $DailyAutomaticBackupStartTime
 * @property int<0, 90>|null $AutomaticBackupRetentionDays
 * @property bool|null $CopyTagsToBackups
 * @property list<Alias>|null $Aliases
 * @property WindowsAuditLogConfiguration|null $AuditLogConfiguration
 * @property DiskIopsConfiguration|null $DiskIopsConfiguration
 * @property string|null $PreferredFileServerIpv6
 */
class WindowsFileSystemConfiguration extends Shape
{
    /**
     * @param array{
     *     ActiveDirectoryId?: string|null,
     *     SelfManagedActiveDirectoryConfiguration?: SelfManagedActiveDirectoryAttributes|null,
     *     DeploymentType?: 'MULTI_AZ_1'|'SINGLE_AZ_1'|'SINGLE_AZ_2'|null,
     *     RemoteAdministrationEndpoint?: string|null,
     *     PreferredSubnetId?: string|null,
     *     PreferredFileServerIp?: string|null,
     *     ThroughputCapacity?: int<8, 100000>|null,
     *     MaintenanceOperationsInProgress?: list<'PATCHING'|'BACKING_UP'>|null,
     *     WeeklyMaintenanceStartTime?: string|null,
     *     DailyAutomaticBackupStartTime?: string|null,
     *     AutomaticBackupRetentionDays?: int<0, 90>|null,
     *     CopyTagsToBackups?: bool|null,
     *     Aliases?: list<Alias>|null,
     *     AuditLogConfiguration?: WindowsAuditLogConfiguration|null,
     *     DiskIopsConfiguration?: DiskIopsConfiguration|null,
     *     PreferredFileServerIpv6?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
