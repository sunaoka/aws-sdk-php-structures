<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PAYER'|'LINKED' $AccountScope
 * @property 'SEVEN_DAYS'|'THIRTY_DAYS'|'SIXTY_DAYS' $LookbackPeriodInDays
 * @property 'ONE_YEAR'|'THREE_YEARS' $TermInYears
 * @property 'NO_UPFRONT'|'PARTIAL_UPFRONT'|'ALL_UPFRONT'|'LIGHT_UTILIZATION'|'MEDIUM_UTILIZATION'|'HEAVY_UTILIZATION' $PaymentOption
 * @property ServiceSpecification $ServiceSpecification
 * @property list<ReservationPurchaseRecommendationDetail> $RecommendationDetails
 * @property ReservationPurchaseRecommendationSummary $RecommendationSummary
 */
class ReservationPurchaseRecommendation extends Shape
{
    /**
     * @param array{
     *     AccountScope?: 'PAYER'|'LINKED',
     *     LookbackPeriodInDays?: 'SEVEN_DAYS'|'THIRTY_DAYS'|'SIXTY_DAYS',
     *     TermInYears?: 'ONE_YEAR'|'THREE_YEARS',
     *     PaymentOption?: 'NO_UPFRONT'|'PARTIAL_UPFRONT'|'ALL_UPFRONT'|'LIGHT_UTILIZATION'|'MEDIUM_UTILIZATION'|'HEAVY_UTILIZATION',
     *     ServiceSpecification?: ServiceSpecification,
     *     RecommendationDetails?: list<ReservationPurchaseRecommendationDetail>,
     *     RecommendationSummary?: ReservationPurchaseRecommendationSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
