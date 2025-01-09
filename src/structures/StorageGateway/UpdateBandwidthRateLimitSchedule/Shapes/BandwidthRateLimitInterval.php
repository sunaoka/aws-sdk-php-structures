<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateBandwidthRateLimitSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $StartHourOfDay
 * @property int $StartMinuteOfHour
 * @property int $EndHourOfDay
 * @property int $EndMinuteOfHour
 * @property list<int> $DaysOfWeek
 * @property int $AverageUploadRateLimitInBitsPerSec
 * @property int $AverageDownloadRateLimitInBitsPerSec
 */
class BandwidthRateLimitInterval extends Shape
{
    /**
     * @param array{
     *     StartHourOfDay: int,
     *     StartMinuteOfHour: int,
     *     EndHourOfDay: int,
     *     EndMinuteOfHour: int,
     *     DaysOfWeek: list<int>,
     *     AverageUploadRateLimitInBitsPerSec?: int,
     *     AverageDownloadRateLimitInBitsPerSec?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
