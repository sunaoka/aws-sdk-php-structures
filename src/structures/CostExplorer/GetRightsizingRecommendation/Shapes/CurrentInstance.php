<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceId
 * @property string $InstanceName
 * @property list<TagValues> $Tags
 * @property ResourceDetails $ResourceDetails
 * @property ResourceUtilization $ResourceUtilization
 * @property string $ReservationCoveredHoursInLookbackPeriod
 * @property string $SavingsPlansCoveredHoursInLookbackPeriod
 * @property string $OnDemandHoursInLookbackPeriod
 * @property string $TotalRunningHoursInLookbackPeriod
 * @property string $MonthlyCost
 * @property string $CurrencyCode
 */
class CurrentInstance extends Shape
{
    /**
     * @param array{
     *     ResourceId?: string,
     *     InstanceName?: string,
     *     Tags?: list<TagValues>,
     *     ResourceDetails?: ResourceDetails,
     *     ResourceUtilization?: ResourceUtilization,
     *     ReservationCoveredHoursInLookbackPeriod?: string,
     *     SavingsPlansCoveredHoursInLookbackPeriod?: string,
     *     OnDemandHoursInLookbackPeriod?: string,
     *     TotalRunningHoursInLookbackPeriod?: string,
     *     MonthlyCost?: string,
     *     CurrencyCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
