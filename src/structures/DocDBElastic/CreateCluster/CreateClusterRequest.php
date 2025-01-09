<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $adminUserName
 * @property string $adminUserPassword
 * @property 'PLAIN_TEXT'|'SECRET_ARN' $authType
 * @property int $backupRetentionPeriod
 * @property string $clientToken
 * @property string $clusterName
 * @property string $kmsKeyId
 * @property string $preferredBackupWindow
 * @property string $preferredMaintenanceWindow
 * @property int $shardCapacity
 * @property int $shardCount
 * @property int $shardInstanceCount
 * @property list<string> $subnetIds
 * @property array<string, string> $tags
 * @property list<string> $vpcSecurityGroupIds
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     adminUserName: string,
     *     adminUserPassword: string,
     *     authType: 'PLAIN_TEXT'|'SECRET_ARN',
     *     backupRetentionPeriod?: int,
     *     clientToken?: string,
     *     clusterName: string,
     *     kmsKeyId?: string,
     *     preferredBackupWindow?: string,
     *     preferredMaintenanceWindow?: string,
     *     shardCapacity: int,
     *     shardCount: int,
     *     shardInstanceCount?: int,
     *     subnetIds?: list<string>,
     *     tags?: array<string, string>,
     *     vpcSecurityGroupIds?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
