<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCommitmentPurchaseAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NO_UPFRONT'|'PARTIAL_UPFRONT'|'ALL_UPFRONT'|'LIGHT_UTILIZATION'|'MEDIUM_UTILIZATION'|'HEAVY_UTILIZATION'|null $PaymentOption
 * @property 'COMPUTE_SP'|'EC2_INSTANCE_SP'|'SAGEMAKER_SP'|'DATABASE_SP'|null $SavingsPlansType
 * @property string|null $Region
 * @property string|null $InstanceFamily
 * @property 'ONE_YEAR'|'THREE_YEARS'|null $TermInYears
 * @property double|null $SavingsPlansCommitment
 * @property string|null $OfferingId
 */
class SavingsPlans extends Shape
{
    /**
     * @param array{
     *     PaymentOption?: 'NO_UPFRONT'|'PARTIAL_UPFRONT'|'ALL_UPFRONT'|'LIGHT_UTILIZATION'|'MEDIUM_UTILIZATION'|'HEAVY_UTILIZATION'|null,
     *     SavingsPlansType?: 'COMPUTE_SP'|'EC2_INSTANCE_SP'|'SAGEMAKER_SP'|'DATABASE_SP'|null,
     *     Region?: string|null,
     *     InstanceFamily?: string|null,
     *     TermInYears?: 'ONE_YEAR'|'THREE_YEARS'|null,
     *     SavingsPlansCommitment?: double|null,
     *     OfferingId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
