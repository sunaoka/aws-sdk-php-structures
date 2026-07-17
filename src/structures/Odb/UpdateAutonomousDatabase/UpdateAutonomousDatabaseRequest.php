<?php

namespace Sunaoka\Aws\Structures\Odb\UpdateAutonomousDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $autonomousDatabaseId
 * @property string|null $adminPassword
 * @property double|null $computeCount
 * @property int<1, 128>|null $cpuCoreCount
 * @property int<1, 384>|null $dataStorageSizeInTBs
 * @property int<20, 393216>|null $dataStorageSizeInGBs
 * @property string|null $displayName
 * @property string|null $dbName
 * @property string|null $dbVersion
 * @property 'OLTP'|'AJD'|'APEX'|'LH'|null $dbWorkload
 * @property list<Shapes\DatabaseTool>|null $dbToolsDetails
 * @property 'STANDARD_EDITION'|'ENTERPRISE_EDITION'|null $databaseEdition
 * @property 'BRING_YOUR_OWN_LICENSE'|'LICENSE_INCLUDED'|null $licenseModel
 * @property bool|null $isAutoScalingEnabled
 * @property bool|null $isAutoScalingForStorageEnabled
 * @property bool|null $isBackupRetentionLocked
 * @property bool|null $isLocalDataGuardEnabled
 * @property bool|null $isMtlsConnectionRequired
 * @property bool|null $isRefreshableClone
 * @property bool|null $isDisconnectPeer
 * @property int<1, 60>|null $backupRetentionPeriodInDays
 * @property double|null $byolComputeCountLimit
 * @property int<0, 3600>|null $localAdgAutoFailoverMaxDataLossLimit
 * @property 'EARLY'|'REGULAR'|null $autonomousMaintenanceScheduleType
 * @property list<Shapes\CustomerContact>|null $customerContactsToSendToOCI
 * @property list<Shapes\ScheduledOperationDetails>|null $scheduledOperations
 * @property Shapes\LongTermBackupSchedule|null $longTermBackupSchedule
 * @property 'READ_ONLY'|'READ_WRITE'|null $openMode
 * @property 'RESTRICTED'|'UNRESTRICTED'|null $permissionLevel
 * @property 'AUTOMATIC'|'MANUAL'|null $refreshableMode
 * @property string|null $privateEndpointIp
 * @property string|null $privateEndpointLabel
 * @property string|null $peerDbId
 * @property string|null $resourcePoolLeaderId
 * @property Shapes\ResourcePoolSummary|null $resourcePoolSummary
 * @property 'PRIMARY'|'SEPARATE'|'NOT_APPLICABLE'|null $standbyAllowlistedIpsSource
 * @property list<string>|null $standbyAllowlistedIps
 * @property list<string>|null $allowlistedIps
 * @property int<3600, 604800>|null $autoRefreshFrequencyInSeconds
 * @property int<0, 604800>|null $autoRefreshPointLagInSeconds
 * @property \Aws\Api\DateTimeResult|null $timeOfAutoRefreshStart
 * @property 'ORACLE_MANAGED'|'AWS_KMS'|null $encryptionKeyProvider
 * @property Shapes\EncryptionKeyConfigurationInput|null $encryptionKeyConfiguration
 * @property 'CUSTOMER_MANAGED_AWS_SECRET'|'API_REQUEST_PARAMETER'|null $adminPasswordSource
 * @property Shapes\AdminPasswordSourceConfigurationInput|null $adminPasswordSourceConfiguration
 */
class UpdateAutonomousDatabaseRequest extends Request
{
    /**
     * @param array{
     *     autonomousDatabaseId: string,
     *     adminPassword?: string|null,
     *     computeCount?: double|null,
     *     cpuCoreCount?: int<1, 128>|null,
     *     dataStorageSizeInTBs?: int<1, 384>|null,
     *     dataStorageSizeInGBs?: int<20, 393216>|null,
     *     displayName?: string|null,
     *     dbName?: string|null,
     *     dbVersion?: string|null,
     *     dbWorkload?: 'OLTP'|'AJD'|'APEX'|'LH'|null,
     *     dbToolsDetails?: list<Shapes\DatabaseTool>|null,
     *     databaseEdition?: 'STANDARD_EDITION'|'ENTERPRISE_EDITION'|null,
     *     licenseModel?: 'BRING_YOUR_OWN_LICENSE'|'LICENSE_INCLUDED'|null,
     *     isAutoScalingEnabled?: bool|null,
     *     isAutoScalingForStorageEnabled?: bool|null,
     *     isBackupRetentionLocked?: bool|null,
     *     isLocalDataGuardEnabled?: bool|null,
     *     isMtlsConnectionRequired?: bool|null,
     *     isRefreshableClone?: bool|null,
     *     isDisconnectPeer?: bool|null,
     *     backupRetentionPeriodInDays?: int<1, 60>|null,
     *     byolComputeCountLimit?: double|null,
     *     localAdgAutoFailoverMaxDataLossLimit?: int<0, 3600>|null,
     *     autonomousMaintenanceScheduleType?: 'EARLY'|'REGULAR'|null,
     *     customerContactsToSendToOCI?: list<Shapes\CustomerContact>|null,
     *     scheduledOperations?: list<Shapes\ScheduledOperationDetails>|null,
     *     longTermBackupSchedule?: Shapes\LongTermBackupSchedule|null,
     *     openMode?: 'READ_ONLY'|'READ_WRITE'|null,
     *     permissionLevel?: 'RESTRICTED'|'UNRESTRICTED'|null,
     *     refreshableMode?: 'AUTOMATIC'|'MANUAL'|null,
     *     privateEndpointIp?: string|null,
     *     privateEndpointLabel?: string|null,
     *     peerDbId?: string|null,
     *     resourcePoolLeaderId?: string|null,
     *     resourcePoolSummary?: Shapes\ResourcePoolSummary|null,
     *     standbyAllowlistedIpsSource?: 'PRIMARY'|'SEPARATE'|'NOT_APPLICABLE'|null,
     *     standbyAllowlistedIps?: list<string>|null,
     *     allowlistedIps?: list<string>|null,
     *     autoRefreshFrequencyInSeconds?: int<3600, 604800>|null,
     *     autoRefreshPointLagInSeconds?: int<0, 604800>|null,
     *     timeOfAutoRefreshStart?: \Aws\Api\DateTimeResult|null,
     *     encryptionKeyProvider?: 'ORACLE_MANAGED'|'AWS_KMS'|null,
     *     encryptionKeyConfiguration?: Shapes\EncryptionKeyConfigurationInput|null,
     *     adminPasswordSource?: 'CUSTOMER_MANAGED_AWS_SECRET'|'API_REQUEST_PARAMETER'|null,
     *     adminPasswordSourceConfiguration?: Shapes\AdminPasswordSourceConfigurationInput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
