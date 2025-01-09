<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SubnetNotFound'|'SecurityGroupNotFound'|'EniLimitReached'|'IpNotAvailable'|'AccessDenied'|'OperationNotPermitted'|'VpcIdNotFound'|'Unknown'|'NodeCreationFailure'|'PodEvictionFailure'|'InsufficientFreeAddresses'|'ClusterUnreachable'|'InsufficientNumberOfReplicas'|'ConfigurationConflict'|'AdmissionRequestDenied'|'UnsupportedAddonModification'|'K8sResourceNotFound' $errorCode
 * @property string $errorMessage
 * @property list<string> $resourceIds
 */
class ErrorDetail extends Shape
{
    /**
     * @param array{
     *     errorCode?: 'SubnetNotFound'|'SecurityGroupNotFound'|'EniLimitReached'|'IpNotAvailable'|'AccessDenied'|'OperationNotPermitted'|'VpcIdNotFound'|'Unknown'|'NodeCreationFailure'|'PodEvictionFailure'|'InsufficientFreeAddresses'|'ClusterUnreachable'|'InsufficientNumberOfReplicas'|'ConfigurationConflict'|'AdmissionRequestDenied'|'UnsupportedAddonModification'|'K8sResourceNotFound',
     *     errorMessage?: string,
     *     resourceIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
