<?php

namespace Sunaoka\Aws\Structures\Rds\RegisterDBProxyTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REGISTERING'|'AVAILABLE'|'UNAVAILABLE'|'UNUSED'|null $State
 * @property 'UNREACHABLE'|'CONNECTION_FAILED'|'AUTH_FAILURE'|'PENDING_PROXY_CAPACITY'|'INVALID_REPLICATION_STATE'|'PROMOTED'|null $Reason
 * @property string|null $Description
 */
class TargetHealth extends Shape
{
    /**
     * @param array{
     *     State?: 'REGISTERING'|'AVAILABLE'|'UNAVAILABLE'|'UNUSED'|null,
     *     Reason?: 'UNREACHABLE'|'CONNECTION_FAILED'|'AUTH_FAILURE'|'PENDING_PROXY_CAPACITY'|'INVALID_REPLICATION_STATE'|'PROMOTED'|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
