<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TotalEstimatedMonthlySavingsAmount
 * @property string|null $TotalEstimatedMonthlySavingsPercentage
 * @property string|null $CurrencyCode
 */
class ReservationPurchaseRecommendationSummary extends Shape
{
    /**
     * @param array{
     *     TotalEstimatedMonthlySavingsAmount?: string|null,
     *     TotalEstimatedMonthlySavingsPercentage?: string|null,
     *     CurrencyCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
