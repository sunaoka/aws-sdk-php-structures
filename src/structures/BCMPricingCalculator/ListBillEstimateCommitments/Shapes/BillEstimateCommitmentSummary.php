<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimateCommitments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property 'SAVINGS_PLANS'|'RESERVED_INSTANCE'|null $purchaseAgreementType
 * @property string|null $offeringId
 * @property string|null $usageAccountId
 * @property string|null $region
 * @property string|null $termLength
 * @property string|null $paymentOption
 * @property CostAmount|null $upfrontPayment
 * @property CostAmount|null $monthlyPayment
 */
class BillEstimateCommitmentSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     purchaseAgreementType?: 'SAVINGS_PLANS'|'RESERVED_INSTANCE'|null,
     *     offeringId?: string|null,
     *     usageAccountId?: string|null,
     *     region?: string|null,
     *     termLength?: string|null,
     *     paymentOption?: string|null,
     *     upfrontPayment?: CostAmount|null,
     *     monthlyPayment?: CostAmount|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
