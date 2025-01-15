<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListSensorStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ComponentName
 * @property string|null $SensorName
 * @property bool|null $DataExists
 * @property CountPercent|null $MissingValues
 * @property CountPercent|null $InvalidValues
 * @property CountPercent|null $InvalidDateEntries
 * @property CountPercent|null $DuplicateTimestamps
 * @property CategoricalValues|null $CategoricalValues
 * @property MultipleOperatingModes|null $MultipleOperatingModes
 * @property LargeTimestampGaps|null $LargeTimestampGaps
 * @property MonotonicValues|null $MonotonicValues
 * @property \Aws\Api\DateTimeResult|null $DataStartTime
 * @property \Aws\Api\DateTimeResult|null $DataEndTime
 */
class SensorStatisticsSummary extends Shape
{
    /**
     * @param array{
     *     ComponentName?: string|null,
     *     SensorName?: string|null,
     *     DataExists?: bool|null,
     *     MissingValues?: CountPercent|null,
     *     InvalidValues?: CountPercent|null,
     *     InvalidDateEntries?: CountPercent|null,
     *     DuplicateTimestamps?: CountPercent|null,
     *     CategoricalValues?: CategoricalValues|null,
     *     MultipleOperatingModes?: MultipleOperatingModes|null,
     *     LargeTimestampGaps?: LargeTimestampGaps|null,
     *     MonotonicValues?: MonotonicValues|null,
     *     DataStartTime?: \Aws\Api\DateTimeResult|null,
     *     DataEndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
