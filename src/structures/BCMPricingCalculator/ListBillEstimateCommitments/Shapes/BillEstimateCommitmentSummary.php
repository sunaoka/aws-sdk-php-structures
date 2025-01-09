<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimateCommitments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property 'SAVINGS_PLANS'|'RESERVED_INSTANCE' $purchaseAgreementType
 * @property string $offeringId
 * @property string $usageAccountId
 * @property string $region
 * @property string $termLength
 * @property string $paymentOption
 * @property CostAmount $upfrontPayment
 * @property CostAmount $monthlyPayment
 */
class BillEstimateCommitmentSummary extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     purchaseAgreementType?: 'SAVINGS_PLANS'|'RESERVED_INSTANCE',
     *     offeringId?: string,
     *     usageAccountId?: string,
     *     region?: string,
     *     termLength?: string,
     *     paymentOption?: string,
     *     upfrontPayment?: CostAmount,
     *     monthlyPayment?: CostAmount
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
