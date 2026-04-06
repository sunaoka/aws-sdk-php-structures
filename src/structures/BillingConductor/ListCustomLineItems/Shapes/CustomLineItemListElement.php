<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListCustomLineItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Name
 * @property ListCustomLineItemChargeDetails|null $ChargeDetails
 * @property 'USD'|'CNY'|null $CurrencyCode
 * @property string|null $Description
 * @property string|null $ProductCode
 * @property string|null $BillingGroupArn
 * @property int|null $CreationTime
 * @property int|null $LastModifiedTime
 * @property int<0, max>|null $AssociationSize
 * @property string|null $AccountId
 */
class CustomLineItemListElement extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Name?: string|null,
     *     ChargeDetails?: ListCustomLineItemChargeDetails|null,
     *     CurrencyCode?: 'USD'|'CNY'|null,
     *     Description?: string|null,
     *     ProductCode?: string|null,
     *     BillingGroupArn?: string|null,
     *     CreationTime?: int|null,
     *     LastModifiedTime?: int|null,
     *     AssociationSize?: int<0, max>|null,
     *     AccountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
