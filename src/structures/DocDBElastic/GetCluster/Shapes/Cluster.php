<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\GetCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $adminUserName
 * @property 'PLAIN_TEXT'|'SECRET_ARN' $authType
 * @property int|null $backupRetentionPeriod
 * @property string $clusterArn
 * @property string $clusterEndpoint
 * @property string $clusterName
 * @property string $createTime
 * @property string $kmsKeyId
 * @property string|null $preferredBackupWindow
 * @property string $preferredMaintenanceWindow
 * @property int $shardCapacity
 * @property int $shardCount
 * @property int|null $shardInstanceCount
 * @property list<Shard>|null $shards
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'UPDATING'|'VPC_ENDPOINT_LIMIT_EXCEEDED'|'IP_ADDRESS_LIMIT_EXCEEDED'|'INVALID_SECURITY_GROUP_ID'|'INVALID_SUBNET_ID'|'INACCESSIBLE_ENCRYPTION_CREDS'|'INACCESSIBLE_SECRET_ARN'|'INACCESSIBLE_VPC_ENDPOINT'|'INCOMPATIBLE_NETWORK'|'MERGING'|'MODIFYING'|'SPLITTING'|'COPYING'|'STARTING'|'STOPPING'|'STOPPED'|'MAINTENANCE'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE' $status
 * @property list<string> $subnetIds
 * @property list<string> $vpcSecurityGroupIds
 */
class Cluster extends Shape
{
    /**
     * @param array{
     *     adminUserName: string,
     *     authType: 'PLAIN_TEXT'|'SECRET_ARN',
     *     backupRetentionPeriod?: int|null,
     *     clusterArn: string,
     *     clusterEndpoint: string,
     *     clusterName: string,
     *     createTime: string,
     *     kmsKeyId: string,
     *     preferredBackupWindow?: string|null,
     *     preferredMaintenanceWindow: string,
     *     shardCapacity: int,
     *     shardCount: int,
     *     shardInstanceCount?: int|null,
     *     shards?: list<Shard>|null,
     *     status: 'CREATING'|'ACTIVE'|'DELETING'|'UPDATING'|'VPC_ENDPOINT_LIMIT_EXCEEDED'|'IP_ADDRESS_LIMIT_EXCEEDED'|'INVALID_SECURITY_GROUP_ID'|'INVALID_SUBNET_ID'|'INACCESSIBLE_ENCRYPTION_CREDS'|'INACCESSIBLE_SECRET_ARN'|'INACCESSIBLE_VPC_ENDPOINT'|'INCOMPATIBLE_NETWORK'|'MERGING'|'MODIFYING'|'SPLITTING'|'COPYING'|'STARTING'|'STOPPING'|'STOPPED'|'MAINTENANCE'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE',
     *     subnetIds: list<string>,
     *     vpcSecurityGroupIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
