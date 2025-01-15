<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceId
 * @property string|null $InstanceName
 * @property list<TagValues>|null $Tags
 * @property ResourceDetails|null $ResourceDetails
 * @property ResourceUtilization|null $ResourceUtilization
 * @property string|null $ReservationCoveredHoursInLookbackPeriod
 * @property string|null $SavingsPlansCoveredHoursInLookbackPeriod
 * @property string|null $OnDemandHoursInLookbackPeriod
 * @property string|null $TotalRunningHoursInLookbackPeriod
 * @property string|null $MonthlyCost
 * @property string|null $CurrencyCode
 */
class CurrentInstance extends Shape
{
    /**
     * @param array{
     *     ResourceId?: string|null,
     *     InstanceName?: string|null,
     *     Tags?: list<TagValues>|null,
     *     ResourceDetails?: ResourceDetails|null,
     *     ResourceUtilization?: ResourceUtilization|null,
     *     ReservationCoveredHoursInLookbackPeriod?: string|null,
     *     SavingsPlansCoveredHoursInLookbackPeriod?: string|null,
     *     OnDemandHoursInLookbackPeriod?: string|null,
     *     TotalRunningHoursInLookbackPeriod?: string|null,
     *     MonthlyCost?: string|null,
     *     CurrencyCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
