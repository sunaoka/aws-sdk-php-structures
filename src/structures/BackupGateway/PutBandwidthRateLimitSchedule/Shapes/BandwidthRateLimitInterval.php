<?php

namespace Sunaoka\Aws\Structures\BackupGateway\PutBandwidthRateLimitSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<51200, 8000000000000>|null $AverageUploadRateLimitInBitsPerSec
 * @property int<0, 23> $StartHourOfDay
 * @property int<0, 23> $EndHourOfDay
 * @property int<0, 59> $StartMinuteOfHour
 * @property int<0, 59> $EndMinuteOfHour
 * @property list<int<0, 6>> $DaysOfWeek
 */
class BandwidthRateLimitInterval extends Shape
{
    /**
     * @param array{
     *     AverageUploadRateLimitInBitsPerSec?: int<51200, 8000000000000>|null,
     *     StartHourOfDay: int<0, 23>,
     *     EndHourOfDay: int<0, 23>,
     *     StartMinuteOfHour: int<0, 59>,
     *     EndMinuteOfHour: int<0, 59>,
     *     DaysOfWeek: list<int<0, 6>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
