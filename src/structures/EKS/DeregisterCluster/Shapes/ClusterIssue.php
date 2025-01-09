<?php

namespace Sunaoka\Aws\Structures\EKS\DeregisterCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AccessDenied'|'ClusterUnreachable'|'ConfigurationConflict'|'InternalFailure'|'ResourceLimitExceeded'|'ResourceNotFound'|'IamRoleNotFound'|'VpcNotFound'|'InsufficientFreeAddresses'|'Ec2ServiceNotSubscribed'|'Ec2SubnetNotFound'|'Ec2SecurityGroupNotFound'|'KmsGrantRevoked'|'KmsKeyNotFound'|'KmsKeyMarkedForDeletion'|'KmsKeyDisabled'|'StsRegionalEndpointDisabled'|'UnsupportedVersion'|'Other' $code
 * @property string $message
 * @property list<string> $resourceIds
 */
class ClusterIssue extends Shape
{
    /**
     * @param array{
     *     code?: 'AccessDenied'|'ClusterUnreachable'|'ConfigurationConflict'|'InternalFailure'|'ResourceLimitExceeded'|'ResourceNotFound'|'IamRoleNotFound'|'VpcNotFound'|'InsufficientFreeAddresses'|'Ec2ServiceNotSubscribed'|'Ec2SubnetNotFound'|'Ec2SecurityGroupNotFound'|'KmsGrantRevoked'|'KmsKeyNotFound'|'KmsKeyMarkedForDeletion'|'KmsKeyDisabled'|'StsRegionalEndpointDisabled'|'UnsupportedVersion'|'Other',
     *     message?: string,
     *     resourceIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
