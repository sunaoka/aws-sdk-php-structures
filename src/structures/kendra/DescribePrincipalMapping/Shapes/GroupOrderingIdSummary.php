<?php

namespace Sunaoka\Aws\Structures\kendra\DescribePrincipalMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FAILED'|'SUCCEEDED'|'PROCESSING'|'DELETING'|'DELETED' $Status
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property \Aws\Api\DateTimeResult $ReceivedAt
 * @property int<0, 32535158400000> $OrderingId
 * @property string $FailureReason
 */
class GroupOrderingIdSummary extends Shape
{
    /**
     * @param array{
     *     Status?: 'FAILED'|'SUCCEEDED'|'PROCESSING'|'DELETING'|'DELETED',
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     ReceivedAt?: \Aws\Api\DateTimeResult,
     *     OrderingId?: int<0, 32535158400000>,
     *     FailureReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
