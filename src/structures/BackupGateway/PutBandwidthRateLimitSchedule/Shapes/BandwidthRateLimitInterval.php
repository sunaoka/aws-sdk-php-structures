<?php

namespace Sunaoka\Aws\Structures\BackupGateway\PutBandwidthRateLimitSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<51200, 8000000000000> $AverageUploadRateLimitInBitsPerSec
 * @property list<int<0, 6>> $DaysOfWeek
 * @property int<0, 23> $EndHourOfDay
 * @property int<0, 59> $EndMinuteOfHour
 * @property int<0, 23> $StartHourOfDay
 * @property int<0, 59> $StartMinuteOfHour
 */
class BandwidthRateLimitInterval extends Shape
{
    /**
     * @param array{
     *     AverageUploadRateLimitInBitsPerSec?: int<51200, 8000000000000>,
     *     DaysOfWeek: list<int<0, 6>>,
     *     EndHourOfDay: int<0, 23>,
     *     EndMinuteOfHour: int<0, 59>,
     *     StartHourOfDay: int<0, 23>,
     *     StartMinuteOfHour: int<0, 59>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
