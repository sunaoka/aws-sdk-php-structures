<?php

namespace Sunaoka\Aws\Structures\Rds\RegisterDBProxyTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REGISTERING'|'AVAILABLE'|'UNAVAILABLE' $State
 * @property 'UNREACHABLE'|'CONNECTION_FAILED'|'AUTH_FAILURE'|'PENDING_PROXY_CAPACITY'|'INVALID_REPLICATION_STATE' $Reason
 * @property string $Description
 */
class TargetHealth extends Shape
{
    /**
     * @param array{
     *     State?: 'REGISTERING'|'AVAILABLE'|'UNAVAILABLE',
     *     Reason?: 'UNREACHABLE'|'CONNECTION_FAILED'|'AUTH_FAILURE'|'PENDING_PROXY_CAPACITY'|'INVALID_REPLICATION_STATE',
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
