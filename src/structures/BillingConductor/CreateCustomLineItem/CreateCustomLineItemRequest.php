<?php

namespace Sunaoka\Aws\Structures\BillingConductor\CreateCustomLineItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $Name
 * @property string $Description
 * @property string $BillingGroupArn
 * @property Shapes\CustomLineItemBillingPeriodRange|null $BillingPeriodRange
 * @property array<string, string>|null $Tags
 * @property Shapes\CustomLineItemChargeDetails $ChargeDetails
 * @property string|null $AccountId
 */
class CreateCustomLineItemRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     Name: string,
     *     Description: string,
     *     BillingGroupArn: string,
     *     BillingPeriodRange?: Shapes\CustomLineItemBillingPeriodRange|null,
     *     Tags?: array<string, string>|null,
     *     ChargeDetails: Shapes\CustomLineItemChargeDetails,
     *     AccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
