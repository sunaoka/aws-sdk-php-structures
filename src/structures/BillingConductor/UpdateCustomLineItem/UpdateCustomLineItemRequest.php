<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdateCustomLineItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $Description
 * @property Shapes\UpdateCustomLineItemChargeDetails $ChargeDetails
 * @property Shapes\CustomLineItemBillingPeriodRange $BillingPeriodRange
 */
class UpdateCustomLineItemRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     Name?: string,
     *     Description?: string,
     *     ChargeDetails?: Shapes\UpdateCustomLineItemChargeDetails,
     *     BillingPeriodRange?: Shapes\CustomLineItemBillingPeriodRange
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
