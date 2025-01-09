<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeAddon\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AccessDenied'|'InternalFailure'|'ClusterUnreachable'|'InsufficientNumberOfReplicas'|'ConfigurationConflict'|'AdmissionRequestDenied'|'UnsupportedAddonModification'|'K8sResourceNotFound'|'AddonSubscriptionNeeded'|'AddonPermissionFailure' $code
 * @property string $message
 * @property list<string> $resourceIds
 */
class AddonIssue extends Shape
{
    /**
     * @param array{
     *     code?: 'AccessDenied'|'InternalFailure'|'ClusterUnreachable'|'InsufficientNumberOfReplicas'|'ConfigurationConflict'|'AdmissionRequestDenied'|'UnsupportedAddonModification'|'K8sResourceNotFound'|'AddonSubscriptionNeeded'|'AddonPermissionFailure',
     *     message?: string,
     *     resourceIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
