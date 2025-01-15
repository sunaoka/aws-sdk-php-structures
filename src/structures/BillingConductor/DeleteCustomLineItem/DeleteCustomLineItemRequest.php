<?php

namespace Sunaoka\Aws\Structures\BillingConductor\DeleteCustomLineItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property Shapes\CustomLineItemBillingPeriodRange|null $BillingPeriodRange
 */
class DeleteCustomLineItemRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     BillingPeriodRange?: Shapes\CustomLineItemBillingPeriodRange|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
