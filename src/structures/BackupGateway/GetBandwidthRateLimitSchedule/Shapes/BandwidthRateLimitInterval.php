<?php

namespace Sunaoka\Aws\Structures\BackupGateway\GetBandwidthRateLimitSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AverageUploadRateLimitInBitsPerSec
 * @property list<int> $DaysOfWeek
 * @property int $EndHourOfDay
 * @property int $EndMinuteOfHour
 * @property int $StartHourOfDay
 * @property int $StartMinuteOfHour
 */
class BandwidthRateLimitInterval extends Shape
{
    /**
     * @param array{
     *     AverageUploadRateLimitInBitsPerSec?: int,
     *     DaysOfWeek: list<int>,
     *     EndHourOfDay: int,
     *     EndMinuteOfHour: int,
     *     StartHourOfDay: int,
     *     StartMinuteOfHour: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
