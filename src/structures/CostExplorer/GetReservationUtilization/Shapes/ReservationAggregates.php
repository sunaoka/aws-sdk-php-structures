<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationUtilization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UtilizationPercentage
 * @property string $UtilizationPercentageInUnits
 * @property string $PurchasedHours
 * @property string $PurchasedUnits
 * @property string $TotalActualHours
 * @property string $TotalActualUnits
 * @property string $UnusedHours
 * @property string $UnusedUnits
 * @property string $OnDemandCostOfRIHoursUsed
 * @property string $NetRISavings
 * @property string $TotalPotentialRISavings
 * @property string $AmortizedUpfrontFee
 * @property string $AmortizedRecurringFee
 * @property string $TotalAmortizedFee
 * @property string $RICostForUnusedHours
 * @property string $RealizedSavings
 * @property string $UnrealizedSavings
 */
class ReservationAggregates extends Shape
{
    /**
     * @param array{
     *     UtilizationPercentage?: string,
     *     UtilizationPercentageInUnits?: string,
     *     PurchasedHours?: string,
     *     PurchasedUnits?: string,
     *     TotalActualHours?: string,
     *     TotalActualUnits?: string,
     *     UnusedHours?: string,
     *     UnusedUnits?: string,
     *     OnDemandCostOfRIHoursUsed?: string,
     *     NetRISavings?: string,
     *     TotalPotentialRISavings?: string,
     *     AmortizedUpfrontFee?: string,
     *     AmortizedRecurringFee?: string,
     *     TotalAmortizedFee?: string,
     *     RICostForUnusedHours?: string,
     *     RealizedSavings?: string,
     *     UnrealizedSavings?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
