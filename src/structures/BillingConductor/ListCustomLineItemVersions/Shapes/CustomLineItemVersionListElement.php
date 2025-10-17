<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListCustomLineItemVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property ListCustomLineItemChargeDetails|null $ChargeDetails
 * @property 'USD'|'CNY'|null $CurrencyCode
 * @property string|null $Description
 * @property string|null $ProductCode
 * @property string|null $BillingGroupArn
 * @property int|null $CreationTime
 * @property int|null $LastModifiedTime
 * @property int<0, max>|null $AssociationSize
 * @property string|null $StartBillingPeriod
 * @property string|null $EndBillingPeriod
 * @property string|null $Arn
 * @property int|null $StartTime
 * @property string|null $AccountId
 * @property 'CONSOLIDATED'|null $ComputationRule
 * @property PresentationObject|null $PresentationDetails
 */
class CustomLineItemVersionListElement extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     ChargeDetails?: ListCustomLineItemChargeDetails|null,
     *     CurrencyCode?: 'USD'|'CNY'|null,
     *     Description?: string|null,
     *     ProductCode?: string|null,
     *     BillingGroupArn?: string|null,
     *     CreationTime?: int|null,
     *     LastModifiedTime?: int|null,
     *     AssociationSize?: int<0, max>|null,
     *     StartBillingPeriod?: string|null,
     *     EndBillingPeriod?: string|null,
     *     Arn?: string|null,
     *     StartTime?: int|null,
     *     AccountId?: string|null,
     *     ComputationRule?: 'CONSOLIDATED'|null,
     *     PresentationDetails?: PresentationObject|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
