<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DbInstanceClass
 * @property int $AllocatedStorage
 * @property string $MasterUserPassword
 * @property int $Port
 * @property int $BackupRetentionPeriod
 * @property bool $MultiAZ
 * @property string $EngineVersion
 * @property string $LicenseModel
 * @property int $Iops
 * @property string $DbInstanceIdentifier
 * @property string $StorageType
 * @property string $CaCertificateIdentifier
 * @property string $DbSubnetGroupName
 * @property AwsRdsPendingCloudWatchLogsExports $PendingCloudWatchLogsExports
 * @property list<AwsRdsDbProcessorFeature> $ProcessorFeatures
 */
class AwsRdsDbPendingModifiedValues extends Shape
{
    /**
     * @param array{
     *     DbInstanceClass?: string,
     *     AllocatedStorage?: int,
     *     MasterUserPassword?: string,
     *     Port?: int,
     *     BackupRetentionPeriod?: int,
     *     MultiAZ?: bool,
     *     EngineVersion?: string,
     *     LicenseModel?: string,
     *     Iops?: int,
     *     DbInstanceIdentifier?: string,
     *     StorageType?: string,
     *     CaCertificateIdentifier?: string,
     *     DbSubnetGroupName?: string,
     *     PendingCloudWatchLogsExports?: AwsRdsPendingCloudWatchLogsExports,
     *     ProcessorFeatures?: list<AwsRdsDbProcessorFeature>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
