<?php

namespace Sunaoka\Aws\Structures\SesV2\GetDomainStatisticsReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VolumeStatistics|null $VolumeStatistics
 * @property double|null $ReadRatePercent
 * @property list<DomainIspPlacement>|null $DomainIspPlacements
 */
class OverallVolume extends Shape
{
    /**
     * @param array{
     *     VolumeStatistics?: VolumeStatistics|null,
     *     ReadRatePercent?: double|null,
     *     DomainIspPlacements?: list<DomainIspPlacement>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
