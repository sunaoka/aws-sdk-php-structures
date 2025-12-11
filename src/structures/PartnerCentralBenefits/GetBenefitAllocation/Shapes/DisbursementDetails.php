<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\GetBenefitAllocation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MonetaryValue|null $DisbursedAmount
 * @property IssuanceDetail|null $IssuanceDetails
 */
class DisbursementDetails extends Shape
{
    /**
     * @param array{
     *     DisbursedAmount?: MonetaryValue|null,
     *     IssuanceDetails?: IssuanceDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
