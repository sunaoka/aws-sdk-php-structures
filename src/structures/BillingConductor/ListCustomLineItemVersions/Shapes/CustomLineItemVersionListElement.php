<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListCustomLineItemVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property ListCustomLineItemChargeDetails $ChargeDetails
 * @property 'USD'|'CNY' $CurrencyCode
 * @property string $Description
 * @property string $ProductCode
 * @property string $BillingGroupArn
 * @property int $CreationTime
 * @property int $LastModifiedTime
 * @property int $AssociationSize
 * @property string $StartBillingPeriod
 * @property string $EndBillingPeriod
 * @property string $Arn
 * @property int $StartTime
 * @property string $AccountId
 */
class CustomLineItemVersionListElement extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     ChargeDetails?: ListCustomLineItemChargeDetails,
     *     CurrencyCode?: 'USD'|'CNY',
     *     Description?: string,
     *     ProductCode?: string,
     *     BillingGroupArn?: string,
     *     CreationTime?: int,
     *     LastModifiedTime?: int,
     *     AssociationSize?: int,
     *     StartBillingPeriod?: string,
     *     EndBillingPeriod?: string,
     *     Arn?: string,
     *     StartTime?: int,
     *     AccountId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
