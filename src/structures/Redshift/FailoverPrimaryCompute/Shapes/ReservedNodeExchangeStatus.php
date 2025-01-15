<?php

namespace Sunaoka\Aws\Structures\Redshift\FailoverPrimaryCompute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReservedNodeExchangeRequestId
 * @property 'REQUESTED'|'PENDING'|'IN_PROGRESS'|'RETRYING'|'SUCCEEDED'|'FAILED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $RequestTime
 * @property string|null $SourceReservedNodeId
 * @property string|null $SourceReservedNodeType
 * @property int|null $SourceReservedNodeCount
 * @property string|null $TargetReservedNodeOfferingId
 * @property string|null $TargetReservedNodeType
 * @property int|null $TargetReservedNodeCount
 */
class ReservedNodeExchangeStatus extends Shape
{
    /**
     * @param array{
     *     ReservedNodeExchangeRequestId?: string|null,
     *     Status?: 'REQUESTED'|'PENDING'|'IN_PROGRESS'|'RETRYING'|'SUCCEEDED'|'FAILED'|null,
     *     RequestTime?: \Aws\Api\DateTimeResult|null,
     *     SourceReservedNodeId?: string|null,
     *     SourceReservedNodeType?: string|null,
     *     SourceReservedNodeCount?: int|null,
     *     TargetReservedNodeOfferingId?: string|null,
     *     TargetReservedNodeType?: string|null,
     *     TargetReservedNodeCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
