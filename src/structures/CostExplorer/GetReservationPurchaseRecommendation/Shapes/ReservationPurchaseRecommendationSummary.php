<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TotalEstimatedMonthlySavingsAmount
 * @property string $TotalEstimatedMonthlySavingsPercentage
 * @property string $CurrencyCode
 */
class ReservationPurchaseRecommendationSummary extends Shape
{
    /**
     * @param array{
     *     TotalEstimatedMonthlySavingsAmount?: string,
     *     TotalEstimatedMonthlySavingsPercentage?: string,
     *     CurrencyCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
