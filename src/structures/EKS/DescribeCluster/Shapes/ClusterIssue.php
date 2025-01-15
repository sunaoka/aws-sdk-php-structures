<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AccessDenied'|'ClusterUnreachable'|'ConfigurationConflict'|'InternalFailure'|'ResourceLimitExceeded'|'ResourceNotFound'|'IamRoleNotFound'|'VpcNotFound'|'InsufficientFreeAddresses'|'Ec2ServiceNotSubscribed'|'Ec2SubnetNotFound'|'Ec2SecurityGroupNotFound'|'KmsGrantRevoked'|'KmsKeyNotFound'|'KmsKeyMarkedForDeletion'|'KmsKeyDisabled'|'StsRegionalEndpointDisabled'|'UnsupportedVersion'|'Other'|null $code
 * @property string|null $message
 * @property list<string>|null $resourceIds
 */
class ClusterIssue extends Shape
{
    /**
     * @param array{
     *     code?: 'AccessDenied'|'ClusterUnreachable'|'ConfigurationConflict'|'InternalFailure'|'ResourceLimitExceeded'|'ResourceNotFound'|'IamRoleNotFound'|'VpcNotFound'|'InsufficientFreeAddresses'|'Ec2ServiceNotSubscribed'|'Ec2SubnetNotFound'|'Ec2SecurityGroupNotFound'|'KmsGrantRevoked'|'KmsKeyNotFound'|'KmsKeyMarkedForDeletion'|'KmsKeyDisabled'|'StsRegionalEndpointDisabled'|'UnsupportedVersion'|'Other'|null,
     *     message?: string|null,
     *     resourceIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
