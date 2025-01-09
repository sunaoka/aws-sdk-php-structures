<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\ListClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clusterArn
 * @property string $clusterName
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'UPDATING'|'VPC_ENDPOINT_LIMIT_EXCEEDED'|'IP_ADDRESS_LIMIT_EXCEEDED'|'INVALID_SECURITY_GROUP_ID'|'INVALID_SUBNET_ID'|'INACCESSIBLE_ENCRYPTION_CREDS'|'INACCESSIBLE_SECRET_ARN'|'INACCESSIBLE_VPC_ENDPOINT'|'INCOMPATIBLE_NETWORK'|'MERGING'|'MODIFYING'|'SPLITTING'|'COPYING'|'STARTING'|'STOPPING'|'STOPPED'|'MAINTENANCE'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE' $status
 */
class ClusterInList extends Shape
{
    /**
     * @param array{
     *     clusterArn: string,
     *     clusterName: string,
     *     status: 'CREATING'|'ACTIVE'|'DELETING'|'UPDATING'|'VPC_ENDPOINT_LIMIT_EXCEEDED'|'IP_ADDRESS_LIMIT_EXCEEDED'|'INVALID_SECURITY_GROUP_ID'|'INVALID_SUBNET_ID'|'INACCESSIBLE_ENCRYPTION_CREDS'|'INACCESSIBLE_SECRET_ARN'|'INACCESSIBLE_VPC_ENDPOINT'|'INCOMPATIBLE_NETWORK'|'MERGING'|'MODIFYING'|'SPLITTING'|'COPYING'|'STARTING'|'STOPPING'|'STOPPED'|'MAINTENANCE'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
