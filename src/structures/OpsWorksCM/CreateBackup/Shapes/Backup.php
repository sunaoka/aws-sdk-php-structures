<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\CreateBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BackupArn
 * @property string|null $BackupId
 * @property 'AUTOMATED'|'MANUAL'|null $BackupType
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $Description
 * @property string|null $Engine
 * @property string|null $EngineModel
 * @property string|null $EngineVersion
 * @property string|null $InstanceProfileArn
 * @property string|null $InstanceType
 * @property string|null $KeyPair
 * @property string|null $PreferredBackupWindow
 * @property string|null $PreferredMaintenanceWindow
 * @property int|null $S3DataSize
 * @property string|null $S3DataUrl
 * @property string|null $S3LogUrl
 * @property list<string>|null $SecurityGroupIds
 * @property string|null $ServerName
 * @property string|null $ServiceRoleArn
 * @property 'IN_PROGRESS'|'OK'|'FAILED'|'DELETING'|null $Status
 * @property string|null $StatusDescription
 * @property list<string>|null $SubnetIds
 * @property string|null $ToolsVersion
 * @property string|null $UserArn
 */
class Backup extends Shape
{
    /**
     * @param array{
     *     BackupArn?: string|null,
     *     BackupId?: string|null,
     *     BackupType?: 'AUTOMATED'|'MANUAL'|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     Engine?: string|null,
     *     EngineModel?: string|null,
     *     EngineVersion?: string|null,
     *     InstanceProfileArn?: string|null,
     *     InstanceType?: string|null,
     *     KeyPair?: string|null,
     *     PreferredBackupWindow?: string|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     S3DataSize?: int|null,
     *     S3DataUrl?: string|null,
     *     S3LogUrl?: string|null,
     *     SecurityGroupIds?: list<string>|null,
     *     ServerName?: string|null,
     *     ServiceRoleArn?: string|null,
     *     Status?: 'IN_PROGRESS'|'OK'|'FAILED'|'DELETING'|null,
     *     StatusDescription?: string|null,
     *     SubnetIds?: list<string>|null,
     *     ToolsVersion?: string|null,
     *     UserArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
