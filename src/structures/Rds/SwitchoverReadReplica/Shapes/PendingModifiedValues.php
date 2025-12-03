<?php

namespace Sunaoka\Aws\Structures\Rds\SwitchoverReadReplica\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBInstanceClass
 * @property int|null $AllocatedStorage
 * @property string|null $MasterUserPassword
 * @property int|null $Port
 * @property int|null $BackupRetentionPeriod
 * @property bool|null $MultiAZ
 * @property string|null $EngineVersion
 * @property string|null $LicenseModel
 * @property int|null $Iops
 * @property int|null $StorageThroughput
 * @property string|null $DBInstanceIdentifier
 * @property string|null $StorageType
 * @property string|null $CACertificateIdentifier
 * @property string|null $DBSubnetGroupName
 * @property PendingCloudwatchLogsExports|null $PendingCloudwatchLogsExports
 * @property list<ProcessorFeature>|null $ProcessorFeatures
 * @property 'full'|'all-paused'|null $AutomationMode
 * @property \Aws\Api\DateTimeResult|null $ResumeFullAutomationModeTime
 * @property bool|null $MultiTenant
 * @property bool|null $IAMDatabaseAuthenticationEnabled
 * @property bool|null $DedicatedLogVolume
 * @property string|null $Engine
 * @property list<AdditionalStorageVolume>|null $AdditionalStorageVolumes
 */
class PendingModifiedValues extends Shape
{
    /**
     * @param array{
     *     DBInstanceClass?: string|null,
     *     AllocatedStorage?: int|null,
     *     MasterUserPassword?: string|null,
     *     Port?: int|null,
     *     BackupRetentionPeriod?: int|null,
     *     MultiAZ?: bool|null,
     *     EngineVersion?: string|null,
     *     LicenseModel?: string|null,
     *     Iops?: int|null,
     *     StorageThroughput?: int|null,
     *     DBInstanceIdentifier?: string|null,
     *     StorageType?: string|null,
     *     CACertificateIdentifier?: string|null,
     *     DBSubnetGroupName?: string|null,
     *     PendingCloudwatchLogsExports?: PendingCloudwatchLogsExports|null,
     *     ProcessorFeatures?: list<ProcessorFeature>|null,
     *     AutomationMode?: 'full'|'all-paused'|null,
     *     ResumeFullAutomationModeTime?: \Aws\Api\DateTimeResult|null,
     *     MultiTenant?: bool|null,
     *     IAMDatabaseAuthenticationEnabled?: bool|null,
     *     DedicatedLogVolume?: bool|null,
     *     Engine?: string|null,
     *     AdditionalStorageVolumes?: list<AdditionalStorageVolume>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
