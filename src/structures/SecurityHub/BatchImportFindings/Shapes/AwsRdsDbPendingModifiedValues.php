<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DbInstanceClass
 * @property int|null $AllocatedStorage
 * @property string|null $MasterUserPassword
 * @property int|null $Port
 * @property int|null $BackupRetentionPeriod
 * @property bool|null $MultiAZ
 * @property string|null $EngineVersion
 * @property string|null $LicenseModel
 * @property int|null $Iops
 * @property string|null $DbInstanceIdentifier
 * @property string|null $StorageType
 * @property string|null $CaCertificateIdentifier
 * @property string|null $DbSubnetGroupName
 * @property AwsRdsPendingCloudWatchLogsExports|null $PendingCloudWatchLogsExports
 * @property list<AwsRdsDbProcessorFeature>|null $ProcessorFeatures
 */
class AwsRdsDbPendingModifiedValues extends Shape
{
    /**
     * @param array{
     *     DbInstanceClass?: string|null,
     *     AllocatedStorage?: int|null,
     *     MasterUserPassword?: string|null,
     *     Port?: int|null,
     *     BackupRetentionPeriod?: int|null,
     *     MultiAZ?: bool|null,
     *     EngineVersion?: string|null,
     *     LicenseModel?: string|null,
     *     Iops?: int|null,
     *     DbInstanceIdentifier?: string|null,
     *     StorageType?: string|null,
     *     CaCertificateIdentifier?: string|null,
     *     DbSubnetGroupName?: string|null,
     *     PendingCloudWatchLogsExports?: AwsRdsPendingCloudWatchLogsExports|null,
     *     ProcessorFeatures?: list<AwsRdsDbProcessorFeature>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
