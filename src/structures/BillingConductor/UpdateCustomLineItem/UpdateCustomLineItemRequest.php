<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdateCustomLineItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string|null $Name
 * @property string|null $Description
 * @property Shapes\UpdateCustomLineItemChargeDetails|null $ChargeDetails
 * @property Shapes\CustomLineItemBillingPeriodRange|null $BillingPeriodRange
 */
class UpdateCustomLineItemRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     ChargeDetails?: Shapes\UpdateCustomLineItemChargeDetails|null,
     *     BillingPeriodRange?: Shapes\CustomLineItemBillingPeriodRange|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
