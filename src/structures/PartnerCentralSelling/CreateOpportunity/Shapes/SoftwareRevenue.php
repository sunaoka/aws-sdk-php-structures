<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateOpportunity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Contract'|'Pay-as-you-go'|'Subscription'|null $DeliveryModel
 * @property string|null $EffectiveDate
 * @property string|null $ExpirationDate
 * @property MonetaryValue|null $Value
 */
class SoftwareRevenue extends Shape
{
    /**
     * @param array{
     *     DeliveryModel?: 'Contract'|'Pay-as-you-go'|'Subscription'|null,
     *     EffectiveDate?: string|null,
     *     ExpirationDate?: string|null,
     *     Value?: MonetaryValue|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
