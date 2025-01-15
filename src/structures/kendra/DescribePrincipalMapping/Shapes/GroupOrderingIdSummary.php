<?php

namespace Sunaoka\Aws\Structures\kendra\DescribePrincipalMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FAILED'|'SUCCEEDED'|'PROCESSING'|'DELETING'|'DELETED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property \Aws\Api\DateTimeResult|null $ReceivedAt
 * @property int<0, 32535158400000>|null $OrderingId
 * @property string|null $FailureReason
 */
class GroupOrderingIdSummary extends Shape
{
    /**
     * @param array{
     *     Status?: 'FAILED'|'SUCCEEDED'|'PROCESSING'|'DELETING'|'DELETED'|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     ReceivedAt?: \Aws\Api\DateTimeResult|null,
     *     OrderingId?: int<0, 32535158400000>|null,
     *     FailureReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
