<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousDatabases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $autonomousDatabaseId
 * @property string|null $autonomousDatabaseArn
 * @property string|null $ociResourceAnchorName
 * @property float|null $percentProgress
 * @property string|null $ocid
 * @property string|null $ociUrl
 * @property string|null $displayName
 * @property string|null $dbName
 * @property string|null $sourceId
 * @property 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'MAINTENANCE_IN_PROGRESS'|'STOPPING'|'STOPPED'|'STARTING'|'UNAVAILABLE'|'RESTORE_IN_PROGRESS'|'RESTORE_FAILED'|'BACKUP_IN_PROGRESS'|'SCALE_IN_PROGRESS'|'AVAILABLE_NEEDS_ATTENTION'|'RESTARTING'|'RECREATING'|'ROLE_CHANGE_IN_PROGRESS'|'UPGRADING'|'INACCESSIBLE'|'STANDBY'|null $status
 * @property string|null $statusReason
 * @property 'REGULAR'|'CLONE'|null $databaseType
 * @property string|null $dbVersion
 * @property 'OLTP'|'AJD'|'APEX'|'LH'|null $dbWorkload
 * @property string|null $characterSet
 * @property string|null $ncharacterSet
 * @property 'STANDARD_EDITION'|'ENTERPRISE_EDITION'|null $databaseEdition
 * @property 'BRING_YOUR_OWN_LICENSE'|'LICENSE_INCLUDED'|null $licenseModel
 * @property 'READ_ONLY'|'READ_WRITE'|null $openMode
 * @property 'RESTRICTED'|'UNRESTRICTED'|null $permissionLevel
 * @property bool|null $isMtlsConnectionRequired
 * @property 'EARLY'|'REGULAR'|null $autonomousMaintenanceScheduleType
 * @property 'DEDICATED'|'SHARED'|null $netServicesArchitecture
 * @property list<string>|null $availableUpgradeVersions
 * @property int|null $byolComputeCountLimit
 * @property AutonomousDatabaseConnectionStrings|null $connectionStringDetails
 * @property string|null $serviceConsoleUrl
 * @property string|null $sqlWebDeveloperUrl
 * @property list<CustomerContact>|null $customerContacts
 * @property AutonomousDatabaseApex|null $apexDetails
 * @property DatabaseStandbySummary|null $standbyDb
 * @property DatabaseStandbySummary|null $localStandbyDb
 * @property 'REGISTERING'|'REGISTERED'|'DEREGISTERING'|'NOT_REGISTERED'|'FAILED'|null $dataSafeStatus
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'NOT_ENABLED'|'FAILED_ENABLING'|'FAILED_DISABLING'|null $databaseManagementStatus
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'NOT_ENABLED'|'FAILED_ENABLING'|'FAILED_DISABLING'|null $operationsInsightsStatus
 * @property string|null $availabilityZone
 * @property string|null $availabilityZoneId
 * @property string|null $maintenanceTargetComponent
 * @property AutonomousDatabaseConnectionUrls|null $connectionUrls
 * @property list<DatabaseTool>|null $dbToolsDetails
 * @property list<ScheduledOperationDetails>|null $scheduledOperations
 * @property string|null $resourcePoolLeaderId
 * @property float|null $computeCount
 * @property 'ECPU'|'OCPU'|null $computeModel
 * @property int|null $cpuCoreCount
 * @property int|null $memoryPerOracleComputeUnitInGBs
 * @property list<int>|null $provisionableCpus
 * @property bool|null $isAutoScalingEnabled
 * @property double|null $dataStorageSizeInTBs
 * @property int|null $dataStorageSizeInGBs
 * @property double|null $usedDataStorageSizeInTBs
 * @property int|null $usedDataStorageSizeInGBs
 * @property double|null $actualUsedDataStorageSizeInTBs
 * @property double|null $allocatedStorageSizeInTBs
 * @property int|null $inMemoryAreaInGBs
 * @property bool|null $isAutoScalingForStorageEnabled
 * @property string|null $odbNetworkId
 * @property string|null $odbNetworkArn
 * @property string|null $privateEndpoint
 * @property string|null $privateEndpointIp
 * @property string|null $privateEndpointLabel
 * @property list<string>|null $allowlistedIps
 * @property list<string>|null $standbyAllowlistedIps
 * @property 'PRIMARY'|'SEPARATE'|'NOT_APPLICABLE'|null $standbyAllowlistedIpsSource
 * @property bool|null $isLocalDataGuardEnabled
 * @property bool|null $isRemoteDataGuardEnabled
 * @property 'ADG'|'BACKUP_BASED'|null $localDisasterRecoveryType
 * @property 'PRIMARY'|'STANDBY'|'DISABLED_STANDBY'|'BACKUP_COPY'|'SNAPSHOT_STANDBY'|null $role
 * @property list<string>|null $peerDbIds
 * @property int|null $failedDataRecoveryInSeconds
 * @property int|null $localAdgAutoFailoverMaxDataLossLimit
 * @property DisasterRecoveryConfiguration|null $remoteDisasterRecoveryConfiguration
 * @property bool|null $isRefreshableClone
 * @property 'AUTOMATIC'|'MANUAL'|null $refreshableMode
 * @property 'REFRESHING'|'NOT_REFRESHING'|null $refreshableStatus
 * @property int|null $autoRefreshFrequencyInSeconds
 * @property int|null $autoRefreshPointLagInSeconds
 * @property bool|null $isReconnectCloneEnabled
 * @property list<int>|null $cloneTableSpaceList
 * @property int|null $backupRetentionPeriodInDays
 * @property LongTermBackupSchedule|null $longTermBackupSchedule
 * @property bool|null $isBackupRetentionLocked
 * @property double|null $totalBackupStorageSizeInGBs
 * @property ResourcePoolSummary|null $resourcePoolSummary
 * @property EncryptionSummary|null $encryptionSummary
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $timeOfLastBackup
 * @property \Aws\Api\DateTimeResult|null $timeMaintenanceBegin
 * @property \Aws\Api\DateTimeResult|null $timeMaintenanceEnd
 * @property \Aws\Api\DateTimeResult|null $timeLocalDataGuardEnabled
 * @property \Aws\Api\DateTimeResult|null $timeDataGuardRoleChanged
 * @property \Aws\Api\DateTimeResult|null $timeOfLastSwitchover
 * @property \Aws\Api\DateTimeResult|null $timeOfLastFailover
 * @property \Aws\Api\DateTimeResult|null $timeOfLastRefresh
 * @property \Aws\Api\DateTimeResult|null $timeOfLastRefreshPoint
 * @property \Aws\Api\DateTimeResult|null $timeOfNextRefresh
 * @property \Aws\Api\DateTimeResult|null $timeOfAutoRefreshStart
 * @property \Aws\Api\DateTimeResult|null $timeDeletionOfFreeAutonomousDatabase
 * @property \Aws\Api\DateTimeResult|null $timeReclamationOfFreeAutonomousDatabase
 * @property \Aws\Api\DateTimeResult|null $timeDisasterRecoveryRoleChanged
 * @property \Aws\Api\DateTimeResult|null $timeUntilReconnectCloneEnabled
 * @property \Aws\Api\DateTimeResult|null $nextLongTermBackupTimeStamp
 * @property \Aws\Api\DateTimeResult|null $timeUndeleted
 */
class AutonomousDatabaseSummary extends Shape
{
    /**
     * @param array{
     *     autonomousDatabaseId?: string|null,
     *     autonomousDatabaseArn?: string|null,
     *     ociResourceAnchorName?: string|null,
     *     percentProgress?: float|null,
     *     ocid?: string|null,
     *     ociUrl?: string|null,
     *     displayName?: string|null,
     *     dbName?: string|null,
     *     sourceId?: string|null,
     *     status?: 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'MAINTENANCE_IN_PROGRESS'|'STOPPING'|'STOPPED'|'STARTING'|'UNAVAILABLE'|'RESTORE_IN_PROGRESS'|'RESTORE_FAILED'|'BACKUP_IN_PROGRESS'|'SCALE_IN_PROGRESS'|'AVAILABLE_NEEDS_ATTENTION'|'RESTARTING'|'RECREATING'|'ROLE_CHANGE_IN_PROGRESS'|'UPGRADING'|'INACCESSIBLE'|'STANDBY'|null,
     *     statusReason?: string|null,
     *     databaseType?: 'REGULAR'|'CLONE'|null,
     *     dbVersion?: string|null,
     *     dbWorkload?: 'OLTP'|'AJD'|'APEX'|'LH'|null,
     *     characterSet?: string|null,
     *     ncharacterSet?: string|null,
     *     databaseEdition?: 'STANDARD_EDITION'|'ENTERPRISE_EDITION'|null,
     *     licenseModel?: 'BRING_YOUR_OWN_LICENSE'|'LICENSE_INCLUDED'|null,
     *     openMode?: 'READ_ONLY'|'READ_WRITE'|null,
     *     permissionLevel?: 'RESTRICTED'|'UNRESTRICTED'|null,
     *     isMtlsConnectionRequired?: bool|null,
     *     autonomousMaintenanceScheduleType?: 'EARLY'|'REGULAR'|null,
     *     netServicesArchitecture?: 'DEDICATED'|'SHARED'|null,
     *     availableUpgradeVersions?: list<string>|null,
     *     byolComputeCountLimit?: int|null,
     *     connectionStringDetails?: AutonomousDatabaseConnectionStrings|null,
     *     serviceConsoleUrl?: string|null,
     *     sqlWebDeveloperUrl?: string|null,
     *     customerContacts?: list<CustomerContact>|null,
     *     apexDetails?: AutonomousDatabaseApex|null,
     *     standbyDb?: DatabaseStandbySummary|null,
     *     localStandbyDb?: DatabaseStandbySummary|null,
     *     dataSafeStatus?: 'REGISTERING'|'REGISTERED'|'DEREGISTERING'|'NOT_REGISTERED'|'FAILED'|null,
     *     databaseManagementStatus?: 'ENABLING'|'ENABLED'|'DISABLING'|'NOT_ENABLED'|'FAILED_ENABLING'|'FAILED_DISABLING'|null,
     *     operationsInsightsStatus?: 'ENABLING'|'ENABLED'|'DISABLING'|'NOT_ENABLED'|'FAILED_ENABLING'|'FAILED_DISABLING'|null,
     *     availabilityZone?: string|null,
     *     availabilityZoneId?: string|null,
     *     maintenanceTargetComponent?: string|null,
     *     connectionUrls?: AutonomousDatabaseConnectionUrls|null,
     *     dbToolsDetails?: list<DatabaseTool>|null,
     *     scheduledOperations?: list<ScheduledOperationDetails>|null,
     *     resourcePoolLeaderId?: string|null,
     *     computeCount?: float|null,
     *     computeModel?: 'ECPU'|'OCPU'|null,
     *     cpuCoreCount?: int|null,
     *     memoryPerOracleComputeUnitInGBs?: int|null,
     *     provisionableCpus?: list<int>|null,
     *     isAutoScalingEnabled?: bool|null,
     *     dataStorageSizeInTBs?: double|null,
     *     dataStorageSizeInGBs?: int|null,
     *     usedDataStorageSizeInTBs?: double|null,
     *     usedDataStorageSizeInGBs?: int|null,
     *     actualUsedDataStorageSizeInTBs?: double|null,
     *     allocatedStorageSizeInTBs?: double|null,
     *     inMemoryAreaInGBs?: int|null,
     *     isAutoScalingForStorageEnabled?: bool|null,
     *     odbNetworkId?: string|null,
     *     odbNetworkArn?: string|null,
     *     privateEndpoint?: string|null,
     *     privateEndpointIp?: string|null,
     *     privateEndpointLabel?: string|null,
     *     allowlistedIps?: list<string>|null,
     *     standbyAllowlistedIps?: list<string>|null,
     *     standbyAllowlistedIpsSource?: 'PRIMARY'|'SEPARATE'|'NOT_APPLICABLE'|null,
     *     isLocalDataGuardEnabled?: bool|null,
     *     isRemoteDataGuardEnabled?: bool|null,
     *     localDisasterRecoveryType?: 'ADG'|'BACKUP_BASED'|null,
     *     role?: 'PRIMARY'|'STANDBY'|'DISABLED_STANDBY'|'BACKUP_COPY'|'SNAPSHOT_STANDBY'|null,
     *     peerDbIds?: list<string>|null,
     *     failedDataRecoveryInSeconds?: int|null,
     *     localAdgAutoFailoverMaxDataLossLimit?: int|null,
     *     remoteDisasterRecoveryConfiguration?: DisasterRecoveryConfiguration|null,
     *     isRefreshableClone?: bool|null,
     *     refreshableMode?: 'AUTOMATIC'|'MANUAL'|null,
     *     refreshableStatus?: 'REFRESHING'|'NOT_REFRESHING'|null,
     *     autoRefreshFrequencyInSeconds?: int|null,
     *     autoRefreshPointLagInSeconds?: int|null,
     *     isReconnectCloneEnabled?: bool|null,
     *     cloneTableSpaceList?: list<int>|null,
     *     backupRetentionPeriodInDays?: int|null,
     *     longTermBackupSchedule?: LongTermBackupSchedule|null,
     *     isBackupRetentionLocked?: bool|null,
     *     totalBackupStorageSizeInGBs?: double|null,
     *     resourcePoolSummary?: ResourcePoolSummary|null,
     *     encryptionSummary?: EncryptionSummary|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     timeOfLastBackup?: \Aws\Api\DateTimeResult|null,
     *     timeMaintenanceBegin?: \Aws\Api\DateTimeResult|null,
     *     timeMaintenanceEnd?: \Aws\Api\DateTimeResult|null,
     *     timeLocalDataGuardEnabled?: \Aws\Api\DateTimeResult|null,
     *     timeDataGuardRoleChanged?: \Aws\Api\DateTimeResult|null,
     *     timeOfLastSwitchover?: \Aws\Api\DateTimeResult|null,
     *     timeOfLastFailover?: \Aws\Api\DateTimeResult|null,
     *     timeOfLastRefresh?: \Aws\Api\DateTimeResult|null,
     *     timeOfLastRefreshPoint?: \Aws\Api\DateTimeResult|null,
     *     timeOfNextRefresh?: \Aws\Api\DateTimeResult|null,
     *     timeOfAutoRefreshStart?: \Aws\Api\DateTimeResult|null,
     *     timeDeletionOfFreeAutonomousDatabase?: \Aws\Api\DateTimeResult|null,
     *     timeReclamationOfFreeAutonomousDatabase?: \Aws\Api\DateTimeResult|null,
     *     timeDisasterRecoveryRoleChanged?: \Aws\Api\DateTimeResult|null,
     *     timeUntilReconnectCloneEnabled?: \Aws\Api\DateTimeResult|null,
     *     nextLongTermBackupTimeStamp?: \Aws\Api\DateTimeResult|null,
     *     timeUndeleted?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
