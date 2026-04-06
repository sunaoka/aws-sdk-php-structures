<?php

namespace Sunaoka\Aws\Structures\EKS\DeregisterCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AccessDenied'|'ClusterUnreachable'|'ConfigurationConflict'|'InternalFailure'|'ResourceLimitExceeded'|'ResourceNotFound'|null $code
 * @property string|null $message
 * @property list<string>|null $resourceIds
 */
class ClusterIssue extends Shape
{
    /**
     * @param array{
     *     code?: 'AccessDenied'|'ClusterUnreachable'|'ConfigurationConflict'|'InternalFailure'|'ResourceLimitExceeded'|'ResourceNotFound'|null,
     *     message?: string|null,
     *     resourceIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
