<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PAYER'|'LINKED'|null $AccountScope
 * @property 'SEVEN_DAYS'|'THIRTY_DAYS'|'SIXTY_DAYS'|null $LookbackPeriodInDays
 * @property 'ONE_YEAR'|'THREE_YEARS'|null $TermInYears
 * @property 'NO_UPFRONT'|'PARTIAL_UPFRONT'|'ALL_UPFRONT'|'LIGHT_UTILIZATION'|'MEDIUM_UTILIZATION'|'HEAVY_UTILIZATION'|null $PaymentOption
 * @property ServiceSpecification|null $ServiceSpecification
 * @property list<ReservationPurchaseRecommendationDetail>|null $RecommendationDetails
 * @property ReservationPurchaseRecommendationSummary|null $RecommendationSummary
 */
class ReservationPurchaseRecommendation extends Shape
{
    /**
     * @param array{
     *     AccountScope?: 'PAYER'|'LINKED'|null,
     *     LookbackPeriodInDays?: 'SEVEN_DAYS'|'THIRTY_DAYS'|'SIXTY_DAYS'|null,
     *     TermInYears?: 'ONE_YEAR'|'THREE_YEARS'|null,
     *     PaymentOption?: 'NO_UPFRONT'|'PARTIAL_UPFRONT'|'ALL_UPFRONT'|'LIGHT_UTILIZATION'|'MEDIUM_UTILIZATION'|'HEAVY_UTILIZATION'|null,
     *     ServiceSpecification?: ServiceSpecification|null,
     *     RecommendationDetails?: list<ReservationPurchaseRecommendationDetail>|null,
     *     RecommendationSummary?: ReservationPurchaseRecommendationSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
