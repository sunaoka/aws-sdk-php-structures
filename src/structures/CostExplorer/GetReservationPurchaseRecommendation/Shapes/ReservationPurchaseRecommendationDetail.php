<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property InstanceDetails|null $InstanceDetails
 * @property string|null $RecommendedNumberOfInstancesToPurchase
 * @property string|null $RecommendedNormalizedUnitsToPurchase
 * @property string|null $MinimumNumberOfInstancesUsedPerHour
 * @property string|null $MinimumNormalizedUnitsUsedPerHour
 * @property string|null $MaximumNumberOfInstancesUsedPerHour
 * @property string|null $MaximumNormalizedUnitsUsedPerHour
 * @property string|null $AverageNumberOfInstancesUsedPerHour
 * @property string|null $AverageNormalizedUnitsUsedPerHour
 * @property string|null $AverageUtilization
 * @property string|null $EstimatedBreakEvenInMonths
 * @property string|null $CurrencyCode
 * @property string|null $EstimatedMonthlySavingsAmount
 * @property string|null $EstimatedMonthlySavingsPercentage
 * @property string|null $EstimatedMonthlyOnDemandCost
 * @property string|null $EstimatedReservationCostForLookbackPeriod
 * @property string|null $UpfrontCost
 * @property string|null $RecurringStandardMonthlyCost
 * @property ReservedCapacityDetails|null $ReservedCapacityDetails
 * @property string|null $RecommendedNumberOfCapacityUnitsToPurchase
 * @property string|null $MinimumNumberOfCapacityUnitsUsedPerHour
 * @property string|null $MaximumNumberOfCapacityUnitsUsedPerHour
 * @property string|null $AverageNumberOfCapacityUnitsUsedPerHour
 */
class ReservationPurchaseRecommendationDetail extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     InstanceDetails?: InstanceDetails|null,
     *     RecommendedNumberOfInstancesToPurchase?: string|null,
     *     RecommendedNormalizedUnitsToPurchase?: string|null,
     *     MinimumNumberOfInstancesUsedPerHour?: string|null,
     *     MinimumNormalizedUnitsUsedPerHour?: string|null,
     *     MaximumNumberOfInstancesUsedPerHour?: string|null,
     *     MaximumNormalizedUnitsUsedPerHour?: string|null,
     *     AverageNumberOfInstancesUsedPerHour?: string|null,
     *     AverageNormalizedUnitsUsedPerHour?: string|null,
     *     AverageUtilization?: string|null,
     *     EstimatedBreakEvenInMonths?: string|null,
     *     CurrencyCode?: string|null,
     *     EstimatedMonthlySavingsAmount?: string|null,
     *     EstimatedMonthlySavingsPercentage?: string|null,
     *     EstimatedMonthlyOnDemandCost?: string|null,
     *     EstimatedReservationCostForLookbackPeriod?: string|null,
     *     UpfrontCost?: string|null,
     *     RecurringStandardMonthlyCost?: string|null,
     *     ReservedCapacityDetails?: ReservedCapacityDetails|null,
     *     RecommendedNumberOfCapacityUnitsToPurchase?: string|null,
     *     MinimumNumberOfCapacityUnitsUsedPerHour?: string|null,
     *     MaximumNumberOfCapacityUnitsUsedPerHour?: string|null,
     *     AverageNumberOfCapacityUnitsUsedPerHour?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
