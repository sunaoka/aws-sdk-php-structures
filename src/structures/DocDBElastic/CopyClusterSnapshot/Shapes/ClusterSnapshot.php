<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\CopyClusterSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $adminUserName
 * @property string $clusterArn
 * @property string $clusterCreationTime
 * @property string $kmsKeyId
 * @property string $snapshotArn
 * @property string $snapshotCreationTime
 * @property string $snapshotName
 * @property 'MANUAL'|'AUTOMATED'|null $snapshotType
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'UPDATING'|'VPC_ENDPOINT_LIMIT_EXCEEDED'|'IP_ADDRESS_LIMIT_EXCEEDED'|'INVALID_SECURITY_GROUP_ID'|'INVALID_SUBNET_ID'|'INACCESSIBLE_ENCRYPTION_CREDS'|'INACCESSIBLE_SECRET_ARN'|'INACCESSIBLE_VPC_ENDPOINT'|'INCOMPATIBLE_NETWORK'|'MERGING'|'MODIFYING'|'SPLITTING'|'COPYING'|'STARTING'|'STOPPING'|'STOPPED'|'MAINTENANCE'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE' $status
 * @property list<string> $subnetIds
 * @property list<string> $vpcSecurityGroupIds
 */
class ClusterSnapshot extends Shape
{
    /**
     * @param array{
     *     adminUserName: string,
     *     clusterArn: string,
     *     clusterCreationTime: string,
     *     kmsKeyId: string,
     *     snapshotArn: string,
     *     snapshotCreationTime: string,
     *     snapshotName: string,
     *     snapshotType?: 'MANUAL'|'AUTOMATED'|null,
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
