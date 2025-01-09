<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetChannelSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ApproximateDurationSeconds
 * @property \Aws\Api\DateTimeResult $ApproximateStartTime
 * @property string $SourceLocationName
 * @property string $VodSourceName
 */
class ScheduleAdBreak extends Shape
{
    /**
     * @param array{
     *     ApproximateDurationSeconds?: int,
     *     ApproximateStartTime?: \Aws\Api\DateTimeResult,
     *     SourceLocationName?: string,
     *     VodSourceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
