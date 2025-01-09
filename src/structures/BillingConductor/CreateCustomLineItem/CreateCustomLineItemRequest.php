<?php

namespace Sunaoka\Aws\Structures\BillingConductor\CreateCustomLineItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $Name
 * @property string $Description
 * @property string $BillingGroupArn
 * @property Shapes\CustomLineItemBillingPeriodRange $BillingPeriodRange
 * @property array<string, string> $Tags
 * @property Shapes\CustomLineItemChargeDetails $ChargeDetails
 * @property string $AccountId
 */
class CreateCustomLineItemRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     Name: string,
     *     Description: string,
     *     BillingGroupArn: string,
     *     BillingPeriodRange?: Shapes\CustomLineItemBillingPeriodRange,
     *     Tags?: array<string, string>,
     *     ChargeDetails: Shapes\CustomLineItemChargeDetails,
     *     AccountId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
