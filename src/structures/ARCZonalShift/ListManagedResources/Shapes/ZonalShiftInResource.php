<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\ListManagedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'APPLIED'|'NOT_APPLIED' $appliedStatus
 * @property string $zonalShiftId
 * @property string $resourceIdentifier
 * @property string $awayFrom
 * @property \Aws\Api\DateTimeResult $expiryTime
 * @property \Aws\Api\DateTimeResult $startTime
 * @property string $comment
 * @property 'ZONAL_SHIFT'|'PRACTICE_RUN'|'FIS_EXPERIMENT'|'ZONAL_AUTOSHIFT'|null $shiftType
 * @property 'FAILED'|'INTERRUPTED'|'PENDING'|'SUCCEEDED'|'CAPACITY_CHECK_FAILED'|null $practiceRunOutcome
 */
class ZonalShiftInResource extends Shape
{
    /**
     * @param array{
     *     appliedStatus: 'APPLIED'|'NOT_APPLIED',
     *     zonalShiftId: string,
     *     resourceIdentifier: string,
     *     awayFrom: string,
     *     expiryTime: \Aws\Api\DateTimeResult,
     *     startTime: \Aws\Api\DateTimeResult,
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
