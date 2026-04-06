<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'IN_SYNC'|'CAPACITY_CONSTRAINED'|'NOT_SUBSCRIBED'|'DEPRECATED'|null $SyncStatus
 * @property string|null $UpdateToken
 */
class PerObjectStatus extends Shape
{
    /**
     * @param array{
     *     SyncStatus?: 'PENDING'|'IN_SYNC'|'CAPACITY_CONSTRAINED'|'NOT_SUBSCRIBED'|'DEPRECATED'|null,
     *     UpdateToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
