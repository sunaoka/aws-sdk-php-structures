<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListCustomLineItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property ListCustomLineItemChargeDetails $ChargeDetails
 * @property 'USD'|'CNY' $CurrencyCode
 * @property string $Description
 * @property string $ProductCode
 * @property string $BillingGroupArn
 * @property int $CreationTime
 * @property int $LastModifiedTime
 * @property int<0, max> $AssociationSize
 * @property string $AccountId
 */
class CustomLineItemListElement extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Name?: string,
     *     ChargeDetails?: ListCustomLineItemChargeDetails,
     *     CurrencyCode?: 'USD'|'CNY',
     *     Description?: string,
     *     ProductCode?: string,
     *     BillingGroupArn?: string,
     *     CreationTime?: int,
     *     LastModifiedTime?: int,
     *     AssociationSize?: int<0, max>,
     *     AccountId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
