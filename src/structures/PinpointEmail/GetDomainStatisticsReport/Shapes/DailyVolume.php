<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetDomainStatisticsReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $StartDate
 * @property VolumeStatistics $VolumeStatistics
 * @property list<DomainIspPlacement> $DomainIspPlacements
 */
class DailyVolume extends Shape
{
    /**
     * @param array{
     *     StartDate?: \Aws\Api\DateTimeResult,
     *     VolumeStatistics?: VolumeStatistics,
     *     DomainIspPlacements?: list<DomainIspPlacement>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
