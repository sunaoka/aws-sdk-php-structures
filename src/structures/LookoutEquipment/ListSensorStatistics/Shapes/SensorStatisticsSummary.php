<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListSensorStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComponentName
 * @property string $SensorName
 * @property bool $DataExists
 * @property CountPercent $MissingValues
 * @property CountPercent $InvalidValues
 * @property CountPercent $InvalidDateEntries
 * @property CountPercent $DuplicateTimestamps
 * @property CategoricalValues $CategoricalValues
 * @property MultipleOperatingModes $MultipleOperatingModes
 * @property LargeTimestampGaps $LargeTimestampGaps
 * @property MonotonicValues $MonotonicValues
 * @property \Aws\Api\DateTimeResult $DataStartTime
 * @property \Aws\Api\DateTimeResult $DataEndTime
 */
class SensorStatisticsSummary extends Shape
{
    /**
     * @param array{
     *     ComponentName?: string,
     *     SensorName?: string,
     *     DataExists?: bool,
     *     MissingValues?: CountPercent,
     *     InvalidValues?: CountPercent,
     *     InvalidDateEntries?: CountPercent,
     *     DuplicateTimestamps?: CountPercent,
     *     CategoricalValues?: CategoricalValues,
     *     MultipleOperatingModes?: MultipleOperatingModes,
     *     LargeTimestampGaps?: LargeTimestampGaps,
     *     MonotonicValues?: MonotonicValues,
     *     DataStartTime?: \Aws\Api\DateTimeResult,
     *     DataEndTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
