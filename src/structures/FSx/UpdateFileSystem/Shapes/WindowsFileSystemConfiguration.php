<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActiveDirectoryId
 * @property SelfManagedActiveDirectoryAttributes $SelfManagedActiveDirectoryConfiguration
 * @property 'MULTI_AZ_1'|'SINGLE_AZ_1'|'SINGLE_AZ_2' $DeploymentType
 * @property string $RemoteAdministrationEndpoint
 * @property string $PreferredSubnetId
 * @property string $PreferredFileServerIp
 * @property int<8, 100000> $ThroughputCapacity
 * @property list<'PATCHING'|'BACKING_UP'> $MaintenanceOperationsInProgress
 * @property string $WeeklyMaintenanceStartTime
 * @property string $DailyAutomaticBackupStartTime
 * @property int<0, 90> $AutomaticBackupRetentionDays
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
     *     ThroughputCapacity?: int<8, 100000>,
     *     MaintenanceOperationsInProgress?: list<'PATCHING'|'BACKING_UP'>,
     *     WeeklyMaintenanceStartTime?: string,
     *     DailyAutomaticBackupStartTime?: string,
     *     AutomaticBackupRetentionDays?: int<0, 90>,
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
