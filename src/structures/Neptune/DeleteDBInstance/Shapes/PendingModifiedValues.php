<?php

namespace Sunaoka\Aws\Structures\Neptune\DeleteDBInstance\Shapes;

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
     *     PendingCloudwatchLogsExports?: PendingCloudwatchLogsExports|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
