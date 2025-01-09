<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansPurchaseRecommendation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'COMPUTE_SP'|'EC2_INSTANCE_SP'|'SAGEMAKER_SP' $SavingsPlansType
 * @property 'ONE_YEAR'|'THREE_YEARS' $TermInYears
 * @property 'NO_UPFRONT'|'PARTIAL_UPFRONT'|'ALL_UPFRONT'|'LIGHT_UTILIZATION'|'MEDIUM_UTILIZATION'|'HEAVY_UTILIZATION' $PaymentOption
 * @property 'PAYER'|'LINKED' $AccountScope
 * @property string $NextPageToken
 * @property int<0, max> $PageSize
 * @property 'SEVEN_DAYS'|'THIRTY_DAYS'|'SIXTY_DAYS' $LookbackPeriodInDays
 * @property Shapes\Expression $Filter
 */
class GetSavingsPlansPurchaseRecommendationRequest extends Request
{
    /**
     * @param array{
     *     SavingsPlansType: 'COMPUTE_SP'|'EC2_INSTANCE_SP'|'SAGEMAKER_SP',
     *     TermInYears: 'ONE_YEAR'|'THREE_YEARS',
     *     PaymentOption: 'NO_UPFRONT'|'PARTIAL_UPFRONT'|'ALL_UPFRONT'|'LIGHT_UTILIZATION'|'MEDIUM_UTILIZATION'|'HEAVY_UTILIZATION',
     *     AccountScope?: 'PAYER'|'LINKED',
     *     NextPageToken?: string,
     *     PageSize?: int<0, max>,
     *     LookbackPeriodInDays: 'SEVEN_DAYS'|'THIRTY_DAYS'|'SIXTY_DAYS',
     *     Filter?: Shapes\Expression
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
