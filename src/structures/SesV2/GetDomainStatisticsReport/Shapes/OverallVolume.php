<?php

namespace Sunaoka\Aws\Structures\SesV2\GetDomainStatisticsReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VolumeStatistics $VolumeStatistics
 * @property double $ReadRatePercent
 * @property list<DomainIspPlacement> $DomainIspPlacements
 */
class OverallVolume extends Shape
{
    /**
     * @param array{
     *     VolumeStatistics?: VolumeStatistics,
     *     ReadRatePercent?: double,
     *     DomainIspPlacements?: list<DomainIspPlacement>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
