<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBProxyTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REGISTERING'|'AVAILABLE'|'UNAVAILABLE'|null $State
 * @property 'UNREACHABLE'|'CONNECTION_FAILED'|'AUTH_FAILURE'|'PENDING_PROXY_CAPACITY'|'INVALID_REPLICATION_STATE'|null $Reason
 * @property string|null $Description
 */
class TargetHealth extends Shape
{
    /**
     * @param array{
     *     State?: 'REGISTERING'|'AVAILABLE'|'UNAVAILABLE'|null,
     *     Reason?: 'UNREACHABLE'|'CONNECTION_FAILED'|'AUTH_FAILURE'|'PENDING_PROXY_CAPACITY'|'INVALID_REPLICATION_STATE'|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
