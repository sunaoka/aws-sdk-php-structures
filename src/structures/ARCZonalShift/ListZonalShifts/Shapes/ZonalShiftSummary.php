<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\ListZonalShifts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $zonalShiftId
 * @property string $resourceIdentifier
 * @property string $awayFrom
 * @property \Aws\Api\DateTimeResult $expiryTime
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'ACTIVE'|'EXPIRED'|'CANCELED' $status
 * @property string $comment
 * @property 'ZONAL_SHIFT'|'PRACTICE_RUN'|'FIS_EXPERIMENT'|'ZONAL_AUTOSHIFT'|null $shiftType
 * @property 'FAILED'|'INTERRUPTED'|'PENDING'|'SUCCEEDED'|'CAPACITY_CHECK_FAILED'|null $practiceRunOutcome
 */
class ZonalShiftSummary extends Shape
{
    /**
     * @param array{
     *     zonalShiftId: string,
     *     resourceIdentifier: string,
     *     awayFrom: string,
     *     expiryTime: \Aws\Api\DateTimeResult,
     *     startTime: \Aws\Api\DateTimeResult,
     *     status: 'ACTIVE'|'EXPIRED'|'CANCELED',
     *     comment: string,
     *     shiftType?: 'ZONAL_SHIFT'|'PRACTICE_RUN'|'FIS_EXPERIMENT'|'ZONAL_AUTOSHIFT'|null,
     *     practiceRunOutcome?: 'FAILED'|'INTERRUPTED'|'PENDING'|'SUCCEEDED'|'CAPACITY_CHECK_FAILED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
