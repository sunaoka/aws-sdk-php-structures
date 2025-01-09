<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetOpportunity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Contract'|'Pay-as-you-go'|'Subscription' $DeliveryModel
 * @property string $EffectiveDate
 * @property string $ExpirationDate
 * @property MonetaryValue $Value
 */
class SoftwareRevenue extends Shape
{
    /**
     * @param array{
     *     DeliveryModel?: 'Contract'|'Pay-as-you-go'|'Subscription',
     *     EffectiveDate?: string,
     *     ExpirationDate?: string,
     *     Value?: MonetaryValue
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
