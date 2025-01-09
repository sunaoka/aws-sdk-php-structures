<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PAYER'|'LINKED' $AccountScope
 * @property 'COMPUTE_SP'|'EC2_INSTANCE_SP'|'SAGEMAKER_SP' $SavingsPlansType
 * @property 'ONE_YEAR'|'THREE_YEARS' $TermInYears
 * @property 'NO_UPFRONT'|'PARTIAL_UPFRONT'|'ALL_UPFRONT'|'LIGHT_UTILIZATION'|'MEDIUM_UTILIZATION'|'HEAVY_UTILIZATION' $PaymentOption
 * @property 'SEVEN_DAYS'|'THIRTY_DAYS'|'SIXTY_DAYS' $LookbackPeriodInDays
 * @property list<SavingsPlansPurchaseRecommendationDetail> $SavingsPlansPurchaseRecommendationDetails
 * @property SavingsPlansPurchaseRecommendationSummary $SavingsPlansPurchaseRecommendationSummary
 */
class SavingsPlansPurchaseRecommendation extends Shape
{
    /**
     * @param array{
     *     AccountScope?: 'PAYER'|'LINKED',
     *     SavingsPlansType?: 'COMPUTE_SP'|'EC2_INSTANCE_SP'|'SAGEMAKER_SP',
     *     TermInYears?: 'ONE_YEAR'|'THREE_YEARS',
     *     PaymentOption?: 'NO_UPFRONT'|'PARTIAL_UPFRONT'|'ALL_UPFRONT'|'LIGHT_UTILIZATION'|'MEDIUM_UTILIZATION'|'HEAVY_UTILIZATION',
     *     LookbackPeriodInDays?: 'SEVEN_DAYS'|'THIRTY_DAYS'|'SIXTY_DAYS',
     *     SavingsPlansPurchaseRecommendationDetails?: list<SavingsPlansPurchaseRecommendationDetail>,
     *     SavingsPlansPurchaseRecommendationSummary?: SavingsPlansPurchaseRecommendationSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
