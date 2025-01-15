<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListSensorStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'POTENTIAL_ISSUE_DETECTED'|'NO_ISSUE_DETECTED' $Status
 * @property int|null $NumberOfLargeTimestampGaps
 * @property int|null $MaxTimestampGapInDays
 */
class LargeTimestampGaps extends Shape
{
    /**
     * @param array{
     *     Status: 'POTENTIAL_ISSUE_DETECTED'|'NO_ISSUE_DETECTED',
     *     NumberOfLargeTimestampGaps?: int|null,
     *     MaxTimestampGapInDays?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
