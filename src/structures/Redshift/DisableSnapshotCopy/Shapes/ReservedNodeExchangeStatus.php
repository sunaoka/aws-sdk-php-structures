<?php

namespace Sunaoka\Aws\Structures\Redshift\DisableSnapshotCopy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReservedNodeExchangeRequestId
 * @property 'REQUESTED'|'PENDING'|'IN_PROGRESS'|'RETRYING'|'SUCCEEDED'|'FAILED' $Status
 * @property \Aws\Api\DateTimeResult $RequestTime
 * @property string $SourceReservedNodeId
 * @property string $SourceReservedNodeType
 * @property int $SourceReservedNodeCount
 * @property string $TargetReservedNodeOfferingId
 * @property string $TargetReservedNodeType
 * @property int $TargetReservedNodeCount
 */
class ReservedNodeExchangeStatus extends Shape
{
    /**
     * @param array{
     *     ReservedNodeExchangeRequestId?: string,
     *     Status?: 'REQUESTED'|'PENDING'|'IN_PROGRESS'|'RETRYING'|'SUCCEEDED'|'FAILED',
     *     RequestTime?: \Aws\Api\DateTimeResult,
     *     SourceReservedNodeId?: string,
     *     SourceReservedNodeType?: string,
     *     SourceReservedNodeCount?: int,
     *     TargetReservedNodeOfferingId?: string,
     *     TargetReservedNodeType?: string,
     *     TargetReservedNodeCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
