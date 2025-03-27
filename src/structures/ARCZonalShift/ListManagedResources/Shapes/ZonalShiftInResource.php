<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\ListManagedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'APPLIED'|'NOT_APPLIED' $appliedStatus
 * @property string $awayFrom
 * @property string $comment
 * @property \Aws\Api\DateTimeResult $expiryTime
 * @property 'FAILED'|'INTERRUPTED'|'PENDING'|'SUCCEEDED'|null $practiceRunOutcome
 * @property string $resourceIdentifier
 * @property 'ZONAL_SHIFT'|'PRACTICE_RUN'|'FIS_EXPERIMENT'|'ZONAL_AUTOSHIFT'|null $shiftType
 * @property \Aws\Api\DateTimeResult $startTime
 * @property string $zonalShiftId
 */
class ZonalShiftInResource extends Shape
{
    /**
     * @param array{
     *     appliedStatus: 'APPLIED'|'NOT_APPLIED',
     *     awayFrom: string,
     *     comment: string,
     *     expiryTime: \Aws\Api\DateTimeResult,
     *     practiceRunOutcome?: 'FAILED'|'INTERRUPTED'|'PENDING'|'SUCCEEDED'|null,
     *     resourceIdentifier: string,
     *     shiftType?: 'ZONAL_SHIFT'|'PRACTICE_RUN'|'FIS_EXPERIMENT'|'ZONAL_AUTOSHIFT'|null,
     *     startTime: \Aws\Api\DateTimeResult,
     *     zonalShiftId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
