<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListCommitmentPurchaseAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NO_UPFRONT'|'PARTIAL_UPFRONT'|'ALL_UPFRONT'|'LIGHT_UTILIZATION'|'MEDIUM_UTILIZATION'|'HEAVY_UTILIZATION' $PaymentOption
 * @property 'COMPUTE_SP'|'EC2_INSTANCE_SP'|'SAGEMAKER_SP' $SavingsPlansType
 * @property string $Region
 * @property string $InstanceFamily
 * @property 'ONE_YEAR'|'THREE_YEARS' $TermInYears
 * @property double $SavingsPlansCommitment
 * @property string $OfferingId
 */
class SavingsPlans extends Shape
{
    /**
     * @param array{
     *     PaymentOption?: 'NO_UPFRONT'|'PARTIAL_UPFRONT'|'ALL_UPFRONT'|'LIGHT_UTILIZATION'|'MEDIUM_UTILIZATION'|'HEAVY_UTILIZATION',
     *     SavingsPlansType?: 'COMPUTE_SP'|'EC2_INSTANCE_SP'|'SAGEMAKER_SP',
     *     Region?: string,
     *     InstanceFamily?: string,
     *     TermInYears?: 'ONE_YEAR'|'THREE_YEARS',
     *     SavingsPlansCommitment?: double,
     *     OfferingId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
