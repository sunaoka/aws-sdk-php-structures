<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\GetBenefitAllocation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DisbursementDetails|null $DisbursementDetails
 * @property ConsumableDetails|null $ConsumableDetails
 * @property CreditDetails|null $CreditDetails
 * @property AccessDetails|null $AccessDetails
 */
class FulfillmentDetails extends Shape
{
    /**
     * @param array{
     *     DisbursementDetails?: DisbursementDetails|null,
     *     ConsumableDetails?: ConsumableDetails|null,
     *     CreditDetails?: CreditDetails|null,
     *     AccessDetails?: AccessDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
