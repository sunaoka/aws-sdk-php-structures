<?php

namespace Sunaoka\Aws\Structures\EKS\AssociateEncryptionConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SubnetNotFound'|'SecurityGroupNotFound'|'EniLimitReached'|'IpNotAvailable'|'AccessDenied'|'OperationNotPermitted'|'VpcIdNotFound'|'Unknown'|'NodeCreationFailure'|'PodEvictionFailure'|'InsufficientFreeAddresses'|'ClusterUnreachable'|'InsufficientNumberOfReplicas'|'ConfigurationConflict'|'AdmissionRequestDenied'|'UnsupportedAddonModification'|'K8sResourceNotFound'|null $errorCode
 * @property string|null $errorMessage
 * @property list<string>|null $resourceIds
 */
class ErrorDetail extends Shape
{
    /**
     * @param array{
     *     errorCode?: 'SubnetNotFound'|'SecurityGroupNotFound'|'EniLimitReached'|'IpNotAvailable'|'AccessDenied'|'OperationNotPermitted'|'VpcIdNotFound'|'Unknown'|'NodeCreationFailure'|'PodEvictionFailure'|'InsufficientFreeAddresses'|'ClusterUnreachable'|'InsufficientNumberOfReplicas'|'ConfigurationConflict'|'AdmissionRequestDenied'|'UnsupportedAddonModification'|'K8sResourceNotFound'|null,
     *     errorMessage?: string|null,
     *     resourceIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
