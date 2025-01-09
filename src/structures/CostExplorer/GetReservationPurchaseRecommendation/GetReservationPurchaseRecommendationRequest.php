<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationPurchaseRecommendation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $Service
 * @property Shapes\Expression $Filter
 * @property 'PAYER'|'LINKED' $AccountScope
 * @property 'SEVEN_DAYS'|'THIRTY_DAYS'|'SIXTY_DAYS' $LookbackPeriodInDays
 * @property 'ONE_YEAR'|'THREE_YEARS' $TermInYears
 * @property 'NO_UPFRONT'|'PARTIAL_UPFRONT'|'ALL_UPFRONT'|'LIGHT_UTILIZATION'|'MEDIUM_UTILIZATION'|'HEAVY_UTILIZATION' $PaymentOption
 * @property Shapes\ServiceSpecification $ServiceSpecification
 * @property int $PageSize
 * @property string $NextPageToken
 */
class GetReservationPurchaseRecommendationRequest extends Request
{
    /**
     * @param array{
     *     AccountId?: string,
     *     Service: string,
     *     Filter?: Shapes\Expression,
     *     AccountScope?: 'PAYER'|'LINKED',
     *     LookbackPeriodInDays?: 'SEVEN_DAYS'|'THIRTY_DAYS'|'SIXTY_DAYS',
     *     TermInYears?: 'ONE_YEAR'|'THREE_YEARS',
     *     PaymentOption?: 'NO_UPFRONT'|'PARTIAL_UPFRONT'|'ALL_UPFRONT'|'LIGHT_UTILIZATION'|'MEDIUM_UTILIZATION'|'HEAVY_UTILIZATION',
     *     ServiceSpecification?: Shapes\ServiceSpecification,
     *     PageSize?: int,
     *     NextPageToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
