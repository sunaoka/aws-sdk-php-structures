<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\DescribeBackups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BackupArn
 * @property string $BackupId
 * @property 'AUTOMATED'|'MANUAL' $BackupType
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $Description
 * @property string $Engine
 * @property string $EngineModel
 * @property string $EngineVersion
 * @property string $InstanceProfileArn
 * @property string $InstanceType
 * @property string $KeyPair
 * @property string $PreferredBackupWindow
 * @property string $PreferredMaintenanceWindow
 * @property int $S3DataSize
 * @property string $S3DataUrl
 * @property string $S3LogUrl
 * @property list<string> $SecurityGroupIds
 * @property string $ServerName
 * @property string $ServiceRoleArn
 * @property 'IN_PROGRESS'|'OK'|'FAILED'|'DELETING' $Status
 * @property string $StatusDescription
 * @property list<string> $SubnetIds
 * @property string $ToolsVersion
 * @property string $UserArn
 */
class Backup extends Shape
{
    /**
     * @param array{
     *     BackupArn?: string,
     *     BackupId?: string,
     *     BackupType?: 'AUTOMATED'|'MANUAL',
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     Engine?: string,
     *     EngineModel?: string,
     *     EngineVersion?: string,
     *     InstanceProfileArn?: string,
     *     InstanceType?: string,
     *     KeyPair?: string,
     *     PreferredBackupWindow?: string,
     *     PreferredMaintenanceWindow?: string,
     *     S3DataSize?: int,
     *     S3DataUrl?: string,
     *     S3LogUrl?: string,
     *     SecurityGroupIds?: list<string>,
     *     ServerName?: string,
     *     ServiceRoleArn?: string,
     *     Status?: 'IN_PROGRESS'|'OK'|'FAILED'|'DELETING',
     *     StatusDescription?: string,
     *     SubnetIds?: list<string>,
     *     ToolsVersion?: string,
     *     UserArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
