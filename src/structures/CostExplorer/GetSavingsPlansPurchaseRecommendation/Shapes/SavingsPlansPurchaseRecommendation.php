<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PAYER'|'LINKED'|null $AccountScope
 * @property 'COMPUTE_SP'|'EC2_INSTANCE_SP'|'SAGEMAKER_SP'|'DATABASE_SP'|null $SavingsPlansType
 * @property 'ONE_YEAR'|'THREE_YEARS'|null $TermInYears
 * @property 'NO_UPFRONT'|'PARTIAL_UPFRONT'|'ALL_UPFRONT'|'LIGHT_UTILIZATION'|'MEDIUM_UTILIZATION'|'HEAVY_UTILIZATION'|null $PaymentOption
 * @property 'SEVEN_DAYS'|'THIRTY_DAYS'|'SIXTY_DAYS'|null $LookbackPeriodInDays
 * @property list<SavingsPlansPurchaseRecommendationDetail>|null $SavingsPlansPurchaseRecommendationDetails
 * @property SavingsPlansPurchaseRecommendationSummary|null $SavingsPlansPurchaseRecommendationSummary
 */
class SavingsPlansPurchaseRecommendation extends Shape
{
    /**
     * @param array{
     *     AccountScope?: 'PAYER'|'LINKED'|null,
     *     SavingsPlansType?: 'COMPUTE_SP'|'EC2_INSTANCE_SP'|'SAGEMAKER_SP'|'DATABASE_SP'|null,
     *     TermInYears?: 'ONE_YEAR'|'THREE_YEARS'|null,
     *     PaymentOption?: 'NO_UPFRONT'|'PARTIAL_UPFRONT'|'ALL_UPFRONT'|'LIGHT_UTILIZATION'|'MEDIUM_UTILIZATION'|'HEAVY_UTILIZATION'|null,
     *     LookbackPeriodInDays?: 'SEVEN_DAYS'|'THIRTY_DAYS'|'SIXTY_DAYS'|null,
     *     SavingsPlansPurchaseRecommendationDetails?: list<SavingsPlansPurchaseRecommendationDetail>|null,
     *     SavingsPlansPurchaseRecommendationSummary?: SavingsPlansPurchaseRecommendationSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
