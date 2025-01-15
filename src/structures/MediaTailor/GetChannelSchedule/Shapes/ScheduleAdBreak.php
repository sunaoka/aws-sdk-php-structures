<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetChannelSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ApproximateDurationSeconds
 * @property \Aws\Api\DateTimeResult|null $ApproximateStartTime
 * @property string|null $SourceLocationName
 * @property string|null $VodSourceName
 */
class ScheduleAdBreak extends Shape
{
    /**
     * @param array{
     *     ApproximateDurationSeconds?: int|null,
     *     ApproximateStartTime?: \Aws\Api\DateTimeResult|null,
     *     SourceLocationName?: string|null,
     *     VodSourceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
