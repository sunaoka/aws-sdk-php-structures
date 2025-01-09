<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActiveDirectoryId
 * @property SelfManagedActiveDirectoryAttributes $SelfManagedActiveDirectoryConfiguration
 * @property 'MULTI_AZ_1'|'SINGLE_AZ_1'|'SINGLE_AZ_2' $DeploymentType
 * @property string $RemoteAdministrationEndpoint
 * @property string $PreferredSubnetId
 * @property string $PreferredFileServerIp
 * @property int $ThroughputCapacity
 * @property list<'PATCHING'|'BACKING_UP'> $MaintenanceOperationsInProgress
 * @property string $WeeklyMaintenanceStartTime
 * @property string $DailyAutomaticBackupStartTime
 * @property int $AutomaticBackupRetentionDays
 * @property bool $CopyTagsToBackups
 * @property list<Alias> $Aliases
 * @property WindowsAuditLogConfiguration $AuditLogConfiguration
 * @property DiskIopsConfiguration $DiskIopsConfiguration
 */
class WindowsFileSystemConfiguration extends Shape
{
    /**
     * @param array{
     *     ActiveDirectoryId?: string,
     *     SelfManagedActiveDirectoryConfiguration?: SelfManagedActiveDirectoryAttributes,
     *     DeploymentType?: 'MULTI_AZ_1'|'SINGLE_AZ_1'|'SINGLE_AZ_2',
     *     RemoteAdministrationEndpoint?: string,
     *     PreferredSubnetId?: string,
     *     PreferredFileServerIp?: string,
     *     ThroughputCapacity?: int,
     *     MaintenanceOperationsInProgress?: list<'PATCHING'|'BACKING_UP'>,
     *     WeeklyMaintenanceStartTime?: string,
     *     DailyAutomaticBackupStartTime?: string,
     *     AutomaticBackupRetentionDays?: int,
     *     CopyTagsToBackups?: bool,
     *     Aliases?: list<Alias>,
     *     AuditLogConfiguration?: WindowsAuditLogConfiguration,
     *     DiskIopsConfiguration?: DiskIopsConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
