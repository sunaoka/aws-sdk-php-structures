<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribeDBInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBInstanceClass
 * @property int $AllocatedStorage
 * @property string $MasterUserPassword
 * @property int $Port
 * @property int $BackupRetentionPeriod
 * @property bool $MultiAZ
 * @property string $EngineVersion
 * @property string $LicenseModel
 * @property int $Iops
 * @property string $DBInstanceIdentifier
 * @property string $StorageType
 * @property string $CACertificateIdentifier
 * @property string $DBSubnetGroupName
 * @property PendingCloudwatchLogsExports $PendingCloudwatchLogsExports
 */
class PendingModifiedValues extends Shape
{
    /**
     * @param array{
     *     DBInstanceClass?: string,
     *     AllocatedStorage?: int,
     *     MasterUserPassword?: string,
     *     Port?: int,
     *     BackupRetentionPeriod?: int,
     *     MultiAZ?: bool,
     *     EngineVersion?: string,
     *     LicenseModel?: string,
     *     Iops?: int,
     *     DBInstanceIdentifier?: string,
     *     StorageType?: string,
     *     CACertificateIdentifier?: string,
     *     DBSubnetGroupName?: string,
     *     PendingCloudwatchLogsExports?: PendingCloudwatchLogsExports
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
