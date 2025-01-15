<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBInstanceReadReplica\Shapes;

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
 * @property string|null $DBInstanceIdentifier
 * @property string|null $StorageType
 * @property string|null $CACertificateIdentifier
 * @property string|null $DBSubnetGroupName
 * @property PendingCloudwatchLogsExports|null $PendingCloudwatchLogsExports
 * @property list<ProcessorFeature>|null $ProcessorFeatures
 * @property bool|null $IAMDatabaseAuthenticationEnabled
 * @property 'full'|'all-paused'|null $AutomationMode
 * @property \Aws\Api\DateTimeResult|null $ResumeFullAutomationModeTime
 * @property int|null $StorageThroughput
 * @property string|null $Engine
 * @property bool|null $DedicatedLogVolume
 * @property bool|null $MultiTenant
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
     *     DBInstanceIdentifier?: string|null,
     *     StorageType?: string|null,
     *     CACertificateIdentifier?: string|null,
     *     DBSubnetGroupName?: string|null,
     *     PendingCloudwatchLogsExports?: PendingCloudwatchLogsExports|null,
     *     ProcessorFeatures?: list<ProcessorFeature>|null,
     *     IAMDatabaseAuthenticationEnabled?: bool|null,
     *     AutomationMode?: 'full'|'all-paused'|null,
     *     ResumeFullAutomationModeTime?: \Aws\Api\DateTimeResult|null,
     *     StorageThroughput?: int|null,
     *     Engine?: string|null,
     *     DedicatedLogVolume?: bool|null,
     *     MultiTenant?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
