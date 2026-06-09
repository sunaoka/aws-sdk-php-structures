<?php

namespace Sunaoka\Aws\Structures\Odb\CreateAutonomousDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $odbNetworkId
 * @property string|null $displayName
 * @property string|null $dbName
 * @property string|null $adminPassword
 * @property double|null $computeCount
 * @property int<1, 384>|null $dataStorageSizeInTBs
 * @property int<20, 393216>|null $dataStorageSizeInGBs
 * @property 'OLTP'|'AJD'|'APEX'|'LH'|null $dbWorkload
 * @property bool|null $isAutoScalingEnabled
 * @property bool|null $isAutoScalingForStorageEnabled
 * @property 'BRING_YOUR_OWN_LICENSE'|'LICENSE_INCLUDED'|null $licenseModel
 * @property string|null $characterSet
 * @property string|null $ncharacterSet
 * @property string|null $dbVersion
 * @property 'STANDARD_EDITION'|'ENTERPRISE_EDITION'|null $databaseEdition
 * @property 'PRIMARY'|'SEPARATE'|'NOT_APPLICABLE'|null $standbyAllowlistedIpsSource
 * @property 'EARLY'|'REGULAR'|null $autonomousMaintenanceScheduleType
 * @property int|null $backupRetentionPeriodInDays
 * @property double|null $byolComputeCountLimit
 * @property int<1, 128>|null $cpuCoreCount
 * @property list<Shapes\CustomerContact>|null $customerContactsToSendToOCI
 * @property string|null $privateEndpointIp
 * @property string|null $privateEndpointLabel
 * @property string|null $resourcePoolLeaderId
 * @property Shapes\ResourcePoolSummary|null $resourcePoolSummary
 * @property list<Shapes\ScheduledOperationDetails>|null $scheduledOperations
 * @property list<string>|null $standbyAllowlistedIps
 * @property list<string>|null $allowlistedIps
 * @property Shapes\TransportableTablespace|null $transportableTablespace
 * @property bool|null $isBackupRetentionLocked
 * @property bool|null $isLocalDataGuardEnabled
 * @property bool|null $isMtlsConnectionRequired
 * @property list<Shapes\DatabaseTool>|null $dbToolsDetails
 * @property 'NONE'|'DATABASE'|'BACKUP_FROM_ID'|'BACKUP_FROM_TIMESTAMP'|'CROSS_REGION_DATAGUARD'|'CROSS_REGION_DISASTER_RECOVERY'|'CLONE_TO_REFRESHABLE'|null $source
 * @property Shapes\SourceConfiguration|null $sourceConfiguration
 * @property 'ORACLE_MANAGED'|'AWS_KMS'|null $encryptionKeyProvider
 * @property Shapes\EncryptionKeyConfigurationInput|null $encryptionKeyConfiguration
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateAutonomousDatabaseRequest extends Request
{
    /**
     * @param array{
     *     odbNetworkId?: string|null,
     *     displayName?: string|null,
     *     dbName?: string|null,
     *     adminPassword?: string|null,
     *     computeCount?: double|null,
     *     dataStorageSizeInTBs?: int<1, 384>|null,
     *     dataStorageSizeInGBs?: int<20, 393216>|null,
     *     dbWorkload?: 'OLTP'|'AJD'|'APEX'|'LH'|null,
     *     isAutoScalingEnabled?: bool|null,
     *     isAutoScalingForStorageEnabled?: bool|null,
     *     licenseModel?: 'BRING_YOUR_OWN_LICENSE'|'LICENSE_INCLUDED'|null,
     *     characterSet?: string|null,
     *     ncharacterSet?: string|null,
     *     dbVersion?: string|null,
     *     databaseEdition?: 'STANDARD_EDITION'|'ENTERPRISE_EDITION'|null,
     *     standbyAllowlistedIpsSource?: 'PRIMARY'|'SEPARATE'|'NOT_APPLICABLE'|null,
     *     autonomousMaintenanceScheduleType?: 'EARLY'|'REGULAR'|null,
     *     backupRetentionPeriodInDays?: int|null,
     *     byolComputeCountLimit?: double|null,
     *     cpuCoreCount?: int<1, 128>|null,
     *     customerContactsToSendToOCI?: list<Shapes\CustomerContact>|null,
     *     privateEndpointIp?: string|null,
     *     privateEndpointLabel?: string|null,
     *     resourcePoolLeaderId?: string|null,
     *     resourcePoolSummary?: Shapes\ResourcePoolSummary|null,
     *     scheduledOperations?: list<Shapes\ScheduledOperationDetails>|null,
     *     standbyAllowlistedIps?: list<string>|null,
     *     allowlistedIps?: list<string>|null,
     *     transportableTablespace?: Shapes\TransportableTablespace|null,
     *     isBackupRetentionLocked?: bool|null,
     *     isLocalDataGuardEnabled?: bool|null,
     *     isMtlsConnectionRequired?: bool|null,
     *     dbToolsDetails?: list<Shapes\DatabaseTool>|null,
     *     source?: 'NONE'|'DATABASE'|'BACKUP_FROM_ID'|'BACKUP_FROM_TIMESTAMP'|'CROSS_REGION_DATAGUARD'|'CROSS_REGION_DISASTER_RECOVERY'|'CLONE_TO_REFRESHABLE'|null,
     *     sourceConfiguration?: Shapes\SourceConfiguration|null,
     *     encryptionKeyProvider?: 'ORACLE_MANAGED'|'AWS_KMS'|null,
     *     encryptionKeyConfiguration?: Shapes\EncryptionKeyConfigurationInput|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
