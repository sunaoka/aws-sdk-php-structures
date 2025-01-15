<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetDomainStatisticsReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property VolumeStatistics|null $VolumeStatistics
 * @property list<DomainIspPlacement>|null $DomainIspPlacements
 */
class DailyVolume extends Shape
{
    /**
     * @param array{
     *     StartDate?: \Aws\Api\DateTimeResult|null,
     *     VolumeStatistics?: VolumeStatistics|null,
     *     DomainIspPlacements?: list<DomainIspPlacement>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
