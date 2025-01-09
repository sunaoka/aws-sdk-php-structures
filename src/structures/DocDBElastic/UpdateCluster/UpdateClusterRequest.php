<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\UpdateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $adminUserPassword
 * @property 'PLAIN_TEXT'|'SECRET_ARN' $authType
 * @property int $backupRetentionPeriod
 * @property string $clientToken
 * @property string $clusterArn
 * @property string $preferredBackupWindow
 * @property string $preferredMaintenanceWindow
 * @property int $shardCapacity
 * @property int $shardCount
 * @property int $shardInstanceCount
 * @property list<string> $subnetIds
 * @property list<string> $vpcSecurityGroupIds
 */
class UpdateClusterRequest extends Request
{
    /**
     * @param array{
     *     adminUserPassword?: string,
     *     authType?: 'PLAIN_TEXT'|'SECRET_ARN',
     *     backupRetentionPeriod?: int,
     *     clientToken?: string,
     *     clusterArn: string,
     *     preferredBackupWindow?: string,
     *     preferredMaintenanceWindow?: string,
     *     shardCapacity?: int,
     *     shardCount?: int,
     *     shardInstanceCount?: int,
     *     subnetIds?: list<string>,
     *     vpcSecurityGroupIds?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
