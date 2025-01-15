<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationUtilization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UtilizationPercentage
 * @property string|null $UtilizationPercentageInUnits
 * @property string|null $PurchasedHours
 * @property string|null $PurchasedUnits
 * @property string|null $TotalActualHours
 * @property string|null $TotalActualUnits
 * @property string|null $UnusedHours
 * @property string|null $UnusedUnits
 * @property string|null $OnDemandCostOfRIHoursUsed
 * @property string|null $NetRISavings
 * @property string|null $TotalPotentialRISavings
 * @property string|null $AmortizedUpfrontFee
 * @property string|null $AmortizedRecurringFee
 * @property string|null $TotalAmortizedFee
 * @property string|null $RICostForUnusedHours
 * @property string|null $RealizedSavings
 * @property string|null $UnrealizedSavings
 */
class ReservationAggregates extends Shape
{
    /**
     * @param array{
     *     UtilizationPercentage?: string|null,
     *     UtilizationPercentageInUnits?: string|null,
     *     PurchasedHours?: string|null,
     *     PurchasedUnits?: string|null,
     *     TotalActualHours?: string|null,
     *     TotalActualUnits?: string|null,
     *     UnusedHours?: string|null,
     *     UnusedUnits?: string|null,
     *     OnDemandCostOfRIHoursUsed?: string|null,
     *     NetRISavings?: string|null,
     *     TotalPotentialRISavings?: string|null,
     *     AmortizedUpfrontFee?: string|null,
     *     AmortizedRecurringFee?: string|null,
     *     TotalAmortizedFee?: string|null,
     *     RICostForUnusedHours?: string|null,
     *     RealizedSavings?: string|null,
     *     UnrealizedSavings?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
