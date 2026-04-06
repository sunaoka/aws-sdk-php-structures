<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $adminUserName
 * @property 'PLAIN_TEXT'|'SECRET_ARN' $authType
 * @property string $clusterArn
 * @property string $clusterEndpoint
 * @property string $clusterName
 * @property string $createTime
 * @property string $kmsKeyId
 * @property string $preferredMaintenanceWindow
 * @property int $shardCapacity
 * @property int $shardCount
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'UPDATING'|'VPC_ENDPOINT_LIMIT_EXCEEDED'|'IP_ADDRESS_LIMIT_EXCEEDED'|'INVALID_SECURITY_GROUP_ID'|'INVALID_SUBNET_ID'|'INACCESSIBLE_ENCRYPTION_CREDS' $status
 * @property list<string> $subnetIds
 * @property list<string> $vpcSecurityGroupIds
 */
class Cluster extends Shape
{
    /**
     * @param array{
     *     adminUserName: string,
     *     authType: 'PLAIN_TEXT'|'SECRET_ARN',
     *     clusterArn: string,
     *     clusterEndpoint: string,
     *     clusterName: string,
     *     createTime: string,
     *     kmsKeyId: string,
     *     preferredMaintenanceWindow: string,
     *     shardCapacity: int,
     *     shardCount: int,
     *     status: 'CREATING'|'ACTIVE'|'DELETING'|'UPDATING'|'VPC_ENDPOINT_LIMIT_EXCEEDED'|'IP_ADDRESS_LIMIT_EXCEEDED'|'INVALID_SECURITY_GROUP_ID'|'INVALID_SUBNET_ID'|'INACCESSIBLE_ENCRYPTION_CREDS',
     *     subnetIds: list<string>,
     *     vpcSecurityGroupIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
