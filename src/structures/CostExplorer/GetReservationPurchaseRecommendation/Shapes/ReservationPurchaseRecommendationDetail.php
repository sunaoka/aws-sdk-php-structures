<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property InstanceDetails $InstanceDetails
 * @property string $RecommendedNumberOfInstancesToPurchase
 * @property string $RecommendedNormalizedUnitsToPurchase
 * @property string $MinimumNumberOfInstancesUsedPerHour
 * @property string $MinimumNormalizedUnitsUsedPerHour
 * @property string $MaximumNumberOfInstancesUsedPerHour
 * @property string $MaximumNormalizedUnitsUsedPerHour
 * @property string $AverageNumberOfInstancesUsedPerHour
 * @property string $AverageNormalizedUnitsUsedPerHour
 * @property string $AverageUtilization
 * @property string $EstimatedBreakEvenInMonths
 * @property string $CurrencyCode
 * @property string $EstimatedMonthlySavingsAmount
 * @property string $EstimatedMonthlySavingsPercentage
 * @property string $EstimatedMonthlyOnDemandCost
 * @property string $EstimatedReservationCostForLookbackPeriod
 * @property string $UpfrontCost
 * @property string $RecurringStandardMonthlyCost
 * @property ReservedCapacityDetails $ReservedCapacityDetails
 * @property string $RecommendedNumberOfCapacityUnitsToPurchase
 * @property string $MinimumNumberOfCapacityUnitsUsedPerHour
 * @property string $MaximumNumberOfCapacityUnitsUsedPerHour
 * @property string $AverageNumberOfCapacityUnitsUsedPerHour
 */
class ReservationPurchaseRecommendationDetail extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     InstanceDetails?: InstanceDetails,
     *     RecommendedNumberOfInstancesToPurchase?: string,
     *     RecommendedNormalizedUnitsToPurchase?: string,
     *     MinimumNumberOfInstancesUsedPerHour?: string,
     *     MinimumNormalizedUnitsUsedPerHour?: string,
     *     MaximumNumberOfInstancesUsedPerHour?: string,
     *     MaximumNormalizedUnitsUsedPerHour?: string,
     *     AverageNumberOfInstancesUsedPerHour?: string,
     *     AverageNormalizedUnitsUsedPerHour?: string,
     *     AverageUtilization?: string,
     *     EstimatedBreakEvenInMonths?: string,
     *     CurrencyCode?: string,
     *     EstimatedMonthlySavingsAmount?: string,
     *     EstimatedMonthlySavingsPercentage?: string,
     *     EstimatedMonthlyOnDemandCost?: string,
     *     EstimatedReservationCostForLookbackPeriod?: string,
     *     UpfrontCost?: string,
     *     RecurringStandardMonthlyCost?: string,
     *     ReservedCapacityDetails?: ReservedCapacityDetails,
     *     RecommendedNumberOfCapacityUnitsToPurchase?: string,
     *     MinimumNumberOfCapacityUnitsUsedPerHour?: string,
     *     MaximumNumberOfCapacityUnitsUsedPerHour?: string,
     *     AverageNumberOfCapacityUnitsUsedPerHour?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
