<?php

namespace Sunaoka\Aws\Structures\EKS\CreateAddon\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AccessDenied'|'InternalFailure'|'ClusterUnreachable'|'InsufficientNumberOfReplicas'|'ConfigurationConflict'|'AdmissionRequestDenied'|'UnsupportedAddonModification'|'K8sResourceNotFound'|null $code
 * @property string|null $message
 * @property list<string>|null $resourceIds
 */
class AddonIssue extends Shape
{
    /**
     * @param array{
     *     code?: 'AccessDenied'|'InternalFailure'|'ClusterUnreachable'|'InsufficientNumberOfReplicas'|'ConfigurationConflict'|'AdmissionRequestDenied'|'UnsupportedAddonModification'|'K8sResourceNotFound'|null,
     *     message?: string|null,
     *     resourceIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
