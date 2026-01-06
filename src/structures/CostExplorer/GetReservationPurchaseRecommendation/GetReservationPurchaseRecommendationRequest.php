<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationPurchaseRecommendation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AccountId
 * @property string $Service
 * @property Shapes\Expression|null $Filter
 * @property 'PAYER'|'LINKED'|null $AccountScope
 * @property 'SEVEN_DAYS'|'THIRTY_DAYS'|'SIXTY_DAYS'|null $LookbackPeriodInDays
 * @property 'ONE_YEAR'|'THREE_YEARS'|null $TermInYears
 * @property 'NO_UPFRONT'|'PARTIAL_UPFRONT'|'ALL_UPFRONT'|'LIGHT_UTILIZATION'|'MEDIUM_UTILIZATION'|'HEAVY_UTILIZATION'|null $PaymentOption
 * @property Shapes\ServiceSpecification|null $ServiceSpecification
 * @property int<0, 6000>|null $PageSize
 * @property string|null $NextPageToken
 */
class GetReservationPurchaseRecommendationRequest extends Request
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     Service: string,
     *     Filter?: Shapes\Expression|null,
     *     AccountScope?: 'PAYER'|'LINKED'|null,
     *     LookbackPeriodInDays?: 'SEVEN_DAYS'|'THIRTY_DAYS'|'SIXTY_DAYS'|null,
     *     TermInYears?: 'ONE_YEAR'|'THREE_YEARS'|null,
     *     PaymentOption?: 'NO_UPFRONT'|'PARTIAL_UPFRONT'|'ALL_UPFRONT'|'LIGHT_UTILIZATION'|'MEDIUM_UTILIZATION'|'HEAVY_UTILIZATION'|null,
     *     ServiceSpecification?: Shapes\ServiceSpecification|null,
     *     PageSize?: int<0, 6000>|null,
     *     NextPageToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
