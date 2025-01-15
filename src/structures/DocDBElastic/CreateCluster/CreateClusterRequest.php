<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $adminUserName
 * @property string $adminUserPassword
 * @property 'PLAIN_TEXT'|'SECRET_ARN' $authType
 * @property int|null $backupRetentionPeriod
 * @property string|null $clientToken
 * @property string $clusterName
 * @property string|null $kmsKeyId
 * @property string|null $preferredBackupWindow
 * @property string|null $preferredMaintenanceWindow
 * @property int $shardCapacity
 * @property int $shardCount
 * @property int|null $shardInstanceCount
 * @property list<string>|null $subnetIds
 * @property array<string, string>|null $tags
 * @property list<string>|null $vpcSecurityGroupIds
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     adminUserName: string,
     *     adminUserPassword: string,
     *     authType: 'PLAIN_TEXT'|'SECRET_ARN',
     *     backupRetentionPeriod?: int|null,
     *     clientToken?: string|null,
     *     clusterName: string,
     *     kmsKeyId?: string|null,
     *     preferredBackupWindow?: string|null,
     *     preferredMaintenanceWindow?: string|null,
     *     shardCapacity: int,
     *     shardCount: int,
     *     shardInstanceCount?: int|null,
     *     subnetIds?: list<string>|null,
     *     tags?: array<string, string>|null,
     *     vpcSecurityGroupIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
