<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\UpdateOpportunity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Contract'|'Pay-as-you-go'|'Subscription'|null $DeliveryModel
 * @property MonetaryValue|null $Value
 * @property string|null $EffectiveDate
 * @property string|null $ExpirationDate
 */
class SoftwareRevenue extends Shape
{
    /**
     * @param array{
     *     DeliveryModel?: 'Contract'|'Pay-as-you-go'|'Subscription'|null,
     *     Value?: MonetaryValue|null,
     *     EffectiveDate?: string|null,
     *     ExpirationDate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
