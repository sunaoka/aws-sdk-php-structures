<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\GetBenefitAllocation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MonetaryValue|null $AllocatedAmount
 * @property MonetaryValue|null $RemainingAmount
 * @property MonetaryValue|null $UtilizedAmount
 * @property IssuanceDetail|null $IssuanceDetails
 */
class ConsumableDetails extends Shape
{
    /**
     * @param array{
     *     AllocatedAmount?: MonetaryValue|null,
     *     RemainingAmount?: MonetaryValue|null,
     *     UtilizedAmount?: MonetaryValue|null,
     *     IssuanceDetails?: IssuanceDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
